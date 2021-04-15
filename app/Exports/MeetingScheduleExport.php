<?php

namespace App\Exports;

use App\ScheduleMeeting;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\BeforeWriting;
use Maatwebsite\Excel\Events\BeforeSheet;

use \Maatwebsite\Excel\Sheet;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\ExcelServiceProvider;

class MeetingScheduleExport implements FromView, WithTitle, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $datadb;
    public function __construct($datadb)
    {
        $this->datadb = $datadb;
    }

    public function title(): string
    {
        return 'Data Report Meeting Schedule';
    }

    public function registerEvents(): array
    {
        return [
            // Handle by a closure.
            BeforeExport::class => function(BeforeExport $event) {
                $event->writer->getProperties()->setTitle('MEETINGSCHEDULE : Data Report Meeting Schedule');
                $event->writer->getProperties()->setCreator('nndproject');
                $event->writer->getProperties()->setDescription('credit from nndproject');
                $event->writer->getProperties()->setCompany('nndproject');
            },


            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->freezePane('A5','A5');
                $event->sheet->getDelegate()->getParent()->getDefaultStyle()->getFont()->setName('Times New Roman')->setSize(14);
                $event->sheet->getDelegate()->getParent()->getDefaultStyle()->getAlignment()->setWrapText(true);
                $event->sheet->getDelegate()->getParent()->getDefaultStyle()->getAlignment()->setHorizontal('left');
                $event->sheet->getDelegate()->getParent()->getDefaultStyle()->getAlignment()->setVertical('top');
               
                
                $event->sheet->getDelegate()->getStyle('A1:Z1')->getFont()->setName('Times New Roman')->setSize(18);
                $event->sheet->getDelegate()->getStyle('A2:Z2')->getFont()->setName('Times New Roman')->setSize(13);
                $event->sheet->getStyle('A4:K4')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
                $event->sheet->getStyle('A3:K3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');


                // $conditional1->getStyle()->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setARGB(Color::COLOR_RED);
                
            },


        ];
    }

    public function view(): View
    {
        Sheet::macro('styleCells', function (Sheet $sheet, string $cellRange, array $style) {
            $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style);
        });
        return view('schedule.export', [
            'data' => $this->datadb,
            'i'     => ''
        ]);
    }
}
