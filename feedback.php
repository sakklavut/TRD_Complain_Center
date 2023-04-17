<?php include('comtop.php'); ?>
<?php include('header.php'); ?>

<div class="navigation">
     <div class="d-flex justify-content-center">
          <h1 class="complaint">ข้อเสนอแนะ</h1>
     </div>
</div>

<div class="container">
     <form action="" class="margin_complaint">
          <div class="form-group">
               <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <div class="row mb-2">
                         <div class="col-xl-2">
                              <label class="form-check-label" for="#">วันที่แจ้ง </label>
                         </div>
                         <div class="col-xl-4">
                              <input type="date" class="form-control">
                         </div>
                    </div>
                    <div class="row mb-2">
                         <div class="col-xl-2">
                              <label class="form-check-label" for="#">หัวข้อเสนอแนะ </label>
                         </div>
                         <div class="col-xl-10">
                              <input type="text" class="form-control" >
                         </div>
                    </div>
                    <div class="row mb-2">
                         <div class="col-xl-2">
                              <label class="form-check-label" for="#">รายละเอียด </label>
                         </div>
                         <div class="col-xl-10">
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                         </div>
                    </div>
                    <div class="row mb-2">
                         <div class="col-xl-2">
                              <label class="form-check-label" for="#">สถานที่ </label>
                         </div>
                         <div class="col-xl-10">
                              <input type="text" class="form-control" >
                         </div>
                    </div>
                    <div class="row mb-2">
                         <div class="col-xl-2">
                                   <label class="form-check-label" for="#">จังหวัด </label>
                         </div>
                         <div class="col-xl-2">
                              <div class="form-group">
                                   <select class="form-control" id="exampleFormControlSelect1">
                                        <option>เลือกจังหวัด</option>
                                   </select>
                              </div>
                         </div>
                         <div class="col-xl-1">
                              <label class="form-check-label text-right" for="#">อำเภอ </label>
                         </div>
                         <div class="col-xl-3">
                              <div class="form-group">
                                   <select class="form-control" id="exampleFormControlSelect1">
                                        <option>เลือกอำเภอ</option>
                                    </select>
                              </div>
                         </div>
                          <div class="col-xl-1">
                              <label class="form-check-label text-right" for="#">ตำบล </label>
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
                              <label class="form-check-label" for="#">ผู้แจ้งข้อเสนอะแนะ </label>
                         </div>
                         <div class="col-xl-4">
                              <input type="text" class="form-control" >
                         </div>
                         <div class="col-xl-2">
                              <label class="form-check-label" for="#">ข้อมูลติดต่อ </label>
                         </div>
                         <div class="col-xl-4">
                              <input type="text" class="form-control" >
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-xl-12 text-center">
                              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">ตกลง</button>
                         </div>
                    </div>
               </div>
          </div>
     </form>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
        <button type="button" class="btn btn-success">ตกลง</button>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>






  
