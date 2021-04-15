<table border="0" cellpadding="0" cellspacing="0" width="580" >
    <tr>
        <td bgcolor="#ffffff" align="left">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td colspan="2" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
  <p>{{strtoupper($data->instansi)}} telah mengisi data form permohonan pertemuan pada {{\Carbon\Carbon::parse($data->created_at)->format('d/m/Y H:i')}} sebagai berikut:</p>
</td>
</tr>
                <tr>
                    <th align="left" valign="top" style="padding-left:30px; padding-right:15; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400;">Nama Instansi</th>
                    <td align="left" valign="top" style="padding-left:10px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{strtoupper($data->instansi)}}</td>
                </tr>
                 <tr>
                    <th align="left" valign="top" style="padding-left:30px; padding-right:15; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400;">Nama Pengaju</th>
                    <td align="left" valign="top" style="padding-left:10px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{$data->cp}}</td>
                 </tr>
                 <tr>
                    <th align="left" valign="top" style="padding-left:30px; padding-right:15; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400;">No Telepon</th>
                    <td align="left" valign="top" style="padding-left:10px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{$data->phone}}</td>
                 </tr>
                 </tr>
                 <tr>
                    <th align="left" valign="top" style="padding-left:30px; padding-right:15; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400;">Jenis Pertemuan</th>
                    <td align="left" valign="top" style="padding-left:10px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{ucWords($data->category)}}</td>
                 </tr>
                 </tr>
                 <tr>
                    <th align="left" valign="top" style="padding-left:30px; padding-right:15; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400;">Waktu Pertemuan</th>
                    <td align="left" valign="top" style="padding-left:10px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{\Carbon\Carbon::parse($data->schedule)->format('d/m/Y H:i')}}</td>
                 </tr>
                 </tr>
                 <tr>
                    <th align="left" valign="top" style="padding-left:30px; padding-right:15; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400;">Lokasi</th>
                    <td align="left" valign="top" style="padding-left:10px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{$data->location}}</td>
                 </tr>
                 </tr>
                 <tr>
                    <th align="left" valign="top" style="padding-left:30px; padding-right:15; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400;">Perkiraan Anggota</th>
                    <td align="left" valign="top" style="padding-left:10px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{$data->audient}}</td>
                 </tr>
                 </tr>
                 <tr>
                    <th align="left" valign="top" style="padding-left:30px; padding-right:15; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400;">Deskripsi Tambahan</th>
                    <td align="left" valign="top" style="padding-left:10px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{$data->description}}</td>
                 </tr>
                 </tr>
                 <tr>
                    <th align="left" valign="top" style="padding-left:30px; padding-right:15; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400;">Status</th>
                    <td align="left" valign="top" style="padding-left:10px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{$data->status}}</td>
                 </tr>
<tr>
                </tr>
            </table>
        </td>
    </tr>
    {{-- <tr>
        <td bgcolor="#ffffff" align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td bgcolor="#ffffff" align="center" style="padding: 30px 30px 30px 30px; border-top:1px solid #dddddd;">
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="left" style="border-radius: 3px;" bgcolor="#ff0000">
                                    <a href="#" target="_blank" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 11px 22px; border-radius: 2px; border: 1px solid #ff0000; display: inline-block;">Donwload</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr> --}}
</table>