<?php include('comtop.php'); ?>
<?php include('header.php'); ?>

<div class="navigation">
     <div class="d-flex justify-content-center">
          <h1 class="complaint">แบบประเมินความพึงพอใจการใช้ระบบรับเรื่องร้องเรียน</h1>
     </div>
</div>

<div class="container">
     <div class="row">
          <div class="col-xl-12 p-5">
               <p>
               คำชี้แจง : แบบประเมินนี้จัดทำขึ้นเพื่อประเมินความพึงพอใจสำหรับผู้ใช้ระบบสารสนเทศเพื่อการบริหารงานด้านเทคโนโลยีสารสนเทศ ตามนโยบายและพันธกิจของกรมบังคับคดี ซึ่งผลการประเมินนี้จะนำไปพัฒนาปรับปรุงเพื่อเพิ่มประสิทธิภาพและความปลอดภัยของระบบสารสนเทศ ให้ตรงกับความต้องการของผู้ใช้ 
               รายละเอียดเกี่ยวกับผู้ตอบแบบประเมินฯ กรุณากรอกข้อมูลตามความเป็นจริง ขอขอบคุณทุกท่านที่ให้ความร่วมมือไว้ ณ ที่นี้ด้วย
               </p>
          </div>
     </div>
     <div class="d-flex justify-content-center">
          <div class="box_assessment">
               <div class="row">
                    <div class="col-xl-12">
                         <img class="icon_assessment"  src="icon/sad (1) 1.svg" alt="">
                    </div>
               </div>
               <div class="row">
                    <div class="col-xl-12">
                         <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Field_One" checked="checked" >
                         <label class="text_assessment">ควรปรับปรุง</label>
                    </div>
               </div>
          </div>
          <div class="box_assessment">
                <div class="row">
                    <div class="col-xl-12">
                         <img class="icon_assessment" src="icon/sad.svg" alt="">
                    </div>
               </div>
               <div class="row">
                    <div class="col-xl-12">
                         <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Field_One" checked="checked" >
                         <label class="text_assessment">ค่อนข้างแย่</label>
                    </div>
               </div>
          </div>
          <div class="box_assessment">
                <div class="row">
                    <div class="col-xl-12">
                         <img class="icon_assessment" src="icon/sad-1.svg" alt="">
                    </div>
               </div>
               <div class="row">
                    <div class="col-xl-12">
                         <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Field_One" checked="checked" >
                         <label class="text_assessment">พอใช้</label>
                    </div>
               </div>
          </div>
          <div class="box_assessment">
                <div class="row">
                    <div class="col-xl-12">
                         <img class="icon_assessment" src="icon/sad-2.svg" alt="">
                    </div>
               </div>
               <div class="row">
                    <div class="col-xl-12">
                         <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Field_One" checked="checked" >
                         <label class="text_assessment">ดี</label>
                    </div>
               </div>
          </div>
          <div class="box_assessment">
                <div class="row">
                    <div class="col-xl-12">
                         <img class="icon_assessment" src="icon/happy.svg" alt="">
                    </div>
               </div>
               <div class="row">
                    <div class="col-xl-12">
                         <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Field_One" checked="checked" >
                         <label class="text_assessment">ดีมาก</label>
                    </div>
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col-xl-12 text-center">
               <button type="button" class="btn btn_assessment"  data-bs-toggle="modal" data-bs-target="#exampleModal">ตกลง</button>
          </div>
     </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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






  
