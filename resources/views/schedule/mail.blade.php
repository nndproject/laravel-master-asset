<style>
    body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
   table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
   img { -ms-interpolation-mode: bicubic; }
   img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
   table { border-collapse: collapse !important; }
   body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
   a[x-apple-data-detectors] { color: inherit !important; text-decoration: none !important; font-size: inherit !important; font-family: inherit !important; font-weight: inherit !important; line-height: inherit !important; }
   div[style*="margin: 16px 0;"] { margin: 0 !important; }
    </style>
   <body style="background-color: #f7f5fa; margin: 0 !important; padding: 0 !important;">
   
       <table border="0" cellpadding="0" cellspacing="0" width="100%">
           <tr>
               <td bgcolor="#ff0000" align="center">
                   <table border="0" cellpadding="0" cellspacing="0" width="580" >
                       <tr>
                           <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">
                               <div style="display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 14px; font-weight:bold;" border="0">MeetingSchedule</div>
                           </td>
                       </tr>
                   </table>
               </td>
           </tr>
           <tr>
               <td bgcolor="#ff0000" align="center" style="padding: 0px 10px 0px 10px;">
                   <table border="0" cellpadding="0" cellspacing="0" width="580" >
                       <tr>
                           <td bgcolor="#ffffff" align="left" valign="top" style="padding: 30px 30px 20px 30px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;">
                               <h1 style="font-size: 32px; font-weight: 400; margin: 0;">Meeting Request</h1>
                           </td>
                       </tr>
                   </table>
               </td>
           </tr>
           <tr>
               <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
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
                                       <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">Nama Instansi</th>
                                       <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{strtoupper($data->instansi)}}</td>
                                   </tr>
                                    <tr>
                                       <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">Nama Pengaju</th>
                                       <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{$data->cp}}</td>
                                    </tr>
                                    <tr>
                                       <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">No Telepon</th>
                                       <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{$data->phone}}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                       <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">Jenis Pertemuan</th>
                                       <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{ucWords($data->category)}}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                       <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">Waktu Pertemuan</th>
                                       <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{\Carbon\Carbon::parse($data->schedule)->format('d/m/Y H:i')}}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                       <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">Lokasi</th>
                                       <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{$data->location}}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                       <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">Perkiraan Anggota</th>
                                       <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{$data->audient}}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                       <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">Deskripsi Tambahan</th>
                                       <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{$data->description}}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                       <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">Status</th>
                                       <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 16px;">: {{$data->status}}</td>
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
               </td>
           </tr>
           <tr>
               <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;"> <table border="0" cellpadding="0" cellspacing="0" width="580">
                   <tr>
                       <td bgcolor="#f4f4f4" align="left" style="padding: 30px 30px 30px 30px; color: #666666; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;" >
                           <p style="margin: 0;">Copyright "<a href="#" target="_blank" style="color: #111111; font-weight: 700;">arionindonesia.id<a>". | support by <strong>#nnd</strong>project</p>
                       </td>
                   </tr>
               </td>
           </tr>
       </table>
   
   </body>