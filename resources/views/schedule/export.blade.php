
        <table>
            <thead>
                <tr><th colspan="12" align="center">Data Report Meeting Schedule</th></tr>
                <tr><th colspan="12" align="center"><strong>updated at {{\Carbon\Carbon::now()->format('d/F/Y')}}</strong></th></tr>
                <tr>
                    <th rowspan="2">No</th>
                    <th colspan="2">Instansi</th>
                    <th rowspan="2">Nama</th>
                    <th rowspan="2">No. Telepon</th>
                    <th colspan="5">Pertemuan</th>
                    <th rowspan="2">Dibuat</th>
                    <th rowspan="2">Status</th>
                </tr>
                <tr>
                    <th>Jenis</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>Anggota</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0;?>
                @foreach ($data as $item)
                <tr>
                    <td class="text-center">{{++$i}}</td>
                    <td>{{$item->type_instansi}}</td>
                    <td>{{$item->instansi}}</td>
                    <td>{{$item->cp}}</td>
                    <td>{{$item->phone}}</td>
                    <td @if($item->category =='online') style="font-family: 'Times New Roman', Times, serif; font-size:14px; background-color: #92D050; " @endif>{{$item->category}}</td>
                    <td>{{{\Carbon\Carbon::parse($item->schedule)->format('d/F/Y H:i')}}}</td>
                    <td>{{$item->location}}</td>
                    <td>{{$item->audient}}</td>
                    <td>{{\Str::limit($item->description,50)}}</td>
                    <td>{{{\Carbon\Carbon::parse($item->created_at)->diffForHumans()}}}</td>
                    @if ($item->status =='Waiting')
                    <td style="font-family: 'Times New Roman', Times, serif; font-size:14px; color:orange;">{{$item->status}}</td>
                    @elseif($item->status =='Approved')
                    <td style="font-family: 'Times New Roman', Times, serif; font-size:14px; color:green;">{{$item->status}}</td>
                    @elseif($item->status =='Decline')
                    <td style="font-family: 'Times New Roman', Times, serif; font-size:14px; color:red;">{{$item->status}}</td>
                    @else
                    <td style="font-family: 'Times New Roman', Times, serif; font-size:14px; color:blue;">{{$item->status}}</td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        
        </table>
    