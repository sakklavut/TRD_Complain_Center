<?php include('comtop.php'); ?>
<?php include('header.php'); ?>

<div class="navigation">
     <div class="d-flex justify-content-center">
          <h1 class="complaint">บันทึกเรื่องการร้องเรียน</h1>
     </div>
</div>

<div class="container">
     <form action="" class="margin_complaint">
          <div class="form-group">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <div class="row">
                         <div class="col-xl-2">
                         <div class="row">
                                   <div class="col-xl-12">
                                        <label class="form-check-label" for="inlineRadio1">รูปแบบการร้องเรียน</label>
                                   </div>
                         </div>
                         </div>
                         <div class="col-xl-8 col-12">
                              <div class="d-flex">
                                   <div class="me-3">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Field_One" checked="checked" >
                                        <label>บันทึกเรื่องร้องเรียน</label>
                                   </div>
                                   <div class="me-3">
                                        <input   type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Field_Two">
                                        <label>บัตรสนเท่ห์</label>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-xl-12">
                              <small class="sub_text">“บันทึกเรื่องร้องเรียน” กรณียินยอมเปิดเผยตัวตน / “บัตรสนเท่ห์” กรณีไม่ยินยอมเปิดเผยตัวตน</small>
                         </div>
                    </div>
                    <div class="Field_One">
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                        <label class="form-check-label" for="#">วันที่แจ้งเรื่องร้องเรียน <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-4">
                                        <input type="date" class="form-control">
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                        <label class="form-check-label" for="#">คำนำหน้าชื่อ <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-4">
                                   <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                             <option>เลือก</option>
                                             <option>นาย</option>
                                             <option>นาง</option>
                                             <option>นางสาว</option>
                                        </select>
                                   </div>
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                        <label class="form-check-label" for="#">ชื่อจริง <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-4">
                                   <input type="text" class="form-control" >
                              </div>
                              <div class="col-xl-2">
                                        <label class="form-check-label" for="#">นามสกุล <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-4">
                                   <input type="text" class="form-control" >
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                        <label class="form-check-label" for="#">เลขประจำตัวประชาชน <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-4">
                                   <input type="text" class="form-control" >
                              </div>
                              <div class="col-xl-2">
                                        <label class="form-check-label" for="#">เบอร์โทรศัพท์ <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-4">
                                   <input type="text" class="form-control" >
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                        <label class="form-check-label" for="#">ที่อยู่ <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-10">
                                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                         </div>
                         
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                        <label class="form-check-label" for="#">จังหวัด <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-2">
                                   <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                             <option>เลือกจังหวัด</option>
                                        </select>
                                   </div>
                              </div>
                              <div class="col-xl-1">
                                        <label class="form-check-label text-right" for="#">อำเภอ <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-3">
                                   <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                             <option>เลือกอำเภอ</option>
                                        </select>
                                   </div>
                              </div>
                              <div class="col-xl-1">
                                        <label class="form-check-label text-right" for="#">ตำบล <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-3">
                                   <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                             <option>เลือกตำบล</option>
                                        </select>
                                   </div>
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                        <label class="form-check-label" for="#">รหัสไปรษณีย์ <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-3">
                                   <input class="form-control" type="text">
                              </div>
                              <div class="col-xl-1">
                                        <label class="form-check-label" for="#">E-mail <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-6">
                                   <input class="form-control" type="email">
                              </div>
                          </div>
                    </div>
               </div>
               <div class="shadow-sm p-3 mb-5 bg-white rounded Field_One">
                    <div class="Field_One">
                         <div class="row mb-2">
                              <div class="col-xl-12">
                                   <h4 class="data_complaint">ข้อมูลเรื่องร้องเรียน</h4>
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                   <label class="form-check-label" for="#">ชื่อเรื่องร้องเรียน <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-10">
                                   <input type="text" class="form-control" >
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                   <label class="form-check-label" for="#">รายละเอียด <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-10">
                                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                   <label class="form-check-label" for="#">สถานที่เกิดเหตุ <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-10">
                                   <input type="text" class="form-control" >
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                        <label class="form-check-label" for="#">จังหวัด <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-2">
                                   <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                             <option>เลือกจังหวัด</option>
                                        </select>
                                   </div>
                              </div>
                              <div class="col-xl-1">
                                        <label class="form-check-label text-right" for="#">อำเภอ <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-3">
                                   <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                             <option>เลือกอำเภอ</option>
                                        </select>
                                   </div>
                              </div>
                              <div class="col-xl-1">
                                        <label class="form-check-label text-right" for="#">ตำบล <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-3">
                                   <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                             <option>เลือกตำบล</option>
                                        </select>
                                   </div>
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                   <label class="form-check-label" for="#">แนบเอกสาร <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-10">
                                   <div class="row mt-2">
                                        <div class="d-flex justify-content-end">
                                             <div>
                                                  <input type="file" id="file" style="display:none;" />
                                                  <button id="button" class="btn btn_add_data" name="button" value="Upload" onclick="thisFileUpload();">เพิ่มข้อมูล</button>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-xl-12">
                                             <table class="table">
                                                  <thead>
                                                       <tr class="table-danger">
                                                            <th scope="col">ลำดับ</th>
                                                            <th scope="col">ชื่อเอกสาร</th>
                                                            <th scope="col">ไฟล์แนบ</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <th scope="row">1</th>
                                                            <td>แบบฟอร์มร้องเรียน</td>
                                                            <td>from_compl.docx</td>  
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12">
                                   <div class="form-check margin_checked">
                                        <input class="form-check-input" type="radio" name="" id="" value="" >
                                        <label class="form-check-label" for="">
                                             ข้อตกลงหลักเกณฑ์รับเรื่องร้องเรียน/ร้องทุกข์
                                        </label>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">ตกลง</button>
                              </div>
                         </div>
                    </div>
               </div> 
               <div class="shadow-sm p-3 mb-5 bg-white rounded Field_Two">
                    <div class="Field_Two">
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                        <label class="form-check-label" for="#">วันที่แจ้งเรื่องร้องเรียน <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-4">
                                        <input type="date" class="form-control">
                              </div>
                         </div>
                    </div>
               </div>
               <div class="shadow-sm p-3 mb-5 bg-white rounded Field_Two">
                    <div class="Field_Two">
                         <div class="row mb-2">
                              <div class="col-xl-12">
                                   <h4 class="data_complaint">ข้อมูลเรื่องร้องเรียน</h4>
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                   <label class="form-check-label" for="#">ชื่อเรื่องร้องเรียน <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-10">
                                   <input type="text" class="form-control" >
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                   <label class="form-check-label" for="#">รายละเอียด <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-10">
                                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                   <label class="form-check-label" for="#">สถานที่เกิดเหตุ <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-10">
                                   <input type="text" class="form-control" >
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                        <label class="form-check-label" for="#">จังหวัด <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-2">
                                   <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                             <option>เลือกจังหวัด</option>
                                        </select>
                                   </div>
                              </div>
                              <div class="col-xl-1">
                                        <label class="form-check-label text-right" for="#">อำเภอ <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-3">
                                   <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                             <option>เลือกอำเภอ</option>
                                        </select>
                                   </div>
                              </div>
                              <div class="col-xl-1">
                                        <label class="form-check-label text-right" for="#">ตำบล <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-3">
                                   <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                             <option>เลือกตำบล</option>
                                        </select>
                                   </div>
                              </div>
                         </div>
                         <div class="row mb-2">
                              <div class="col-xl-2">
                                   <label class="form-check-label" for="#">แนบเอกสาร <small class="mark_red">*</small></label>
                              </div>
                              <div class="col-xl-10">
                                   <div class="row mt-2">
                                        <div class="d-flex justify-content-end">
                                             <div>
                                                  <input type="file" id="file" style="display:none;" />
                                                  <button id="button" class="btn btn_add_data" name="button" value="Upload" onclick="thisFileUpload();">เพิ่มข้อมูล</button>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-xl-12">
                                             <table class="table">
                                                  <thead>
                                                       <tr class="table-danger">
                                                            <th scope="col">ลำดับ</th>
                                                            <th scope="col">ชื่อเอกสาร</th>
                                                            <th scope="col">ไฟล์แนบ</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <th scope="row">1</th>
                                                            <td>แบบฟอร์มร้องเรียน</td>
                                                            <td>from_compl.docx</td>  
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                         </div>
                        
                         <div class="row">
                              <div class="col-xl-12 text-center">
                                   <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">ตกลง</button>
                              </div>
                         </div>
                    </div>
               </div> 
          </div>
     </form>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
          <div class="row">
               <div class="col-xl-3 text-center">
                    <img src="icon/exclamation 1.svg" alt="">
               </div>
               <div class="col-xl-8">
                    <p>กรุณายืนยันข้อมูลของท่านด้วยรหัส OTP
ผ่านเบอร์โทรศัพท์มือถือที่ท่านระบุไว้</p>
               </div>
          </div>
          <div class="row">
               <div class="col-xl-12">
                     <input type="text" class="form-control" placeholder="กรอกเลข OTP" >
               </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#secondModal" data-bs-dismiss="modal">ตกลง</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="secondModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
          <div class="row">
               <div class="col-xl-12 text-center">
                    <img src="icon/feedback.svg" alt="">
               </div>
          </div>
          <div class="row">
               <div class="col-xl-12 text-center">
                     <p> ระบบได้ทำการส่งเรื่องร้องเรียนเรียบร้อยแล้ว</p>
               </div>
          </div>
      </div>
    </div>
  </div>
</div>




<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>






     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     <script>
          $(document).ready(function () {

$('input[type="radio"]').click(function () {
    if ($(this).attr("value") == "Field_One") {
        $(".Field_One").show();
        $(".Field_Two").hide();
    }
    if ($(this).attr("value") == "Field_Two") {
        $(".Field_Two").show();
        $(".Field_One").hide();

    }
});

$('input[type="radio"]').trigger('click');  // trigger the event
});

function thisFileUpload() {
            document.getElementById("file").click();
        };
</script>
