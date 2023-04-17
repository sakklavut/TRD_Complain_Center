<div class="header">
  <div class="container">
      <div class="d-flex  justify-content-between">
          <div class="box_logo">
                <img class="img-fluid" src="icon/logo.svg" alt="">
          </div>
          <div class="box_login">
                <div class="d-flex box_user">
                    <img class="img-fluid icon_user" src="icon/user.svg" alt="">
                    <p class="login" data-bs-toggle="modal" data-bs-target="#login">เข้าสู่ระบบ</p>
                </div>
          </div>
      </div>
  </div>
</div>





<!-- Modal  login -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
         <div class="row">
              <div class="col-xl-12 text-center">
                  <h1>เข้าสู่ระบบ</h1>
              </div>
         </div>
         <div class="row">
             <div class="col-xl-12">
                <div class="input-group has-validation mb-1">
                    <span class="input-group-text" id="inputGroupPrepend">
                      <img src="icon/user_login.svg" alt="">
                    </span>
                       <input type="text" class="form-control" id="#" aria-describedby="inputGroupPrepend" placeholder="เลขประจำตัวประชาชน">
                </div>
              </div>
         </div>
         <div class="row">
            <div class="col-xl-12">
                <div class="input-group has-validation mb-1">
                    <span class="input-group-text" id="inputGroupPrepend">
                        <img src="icon/login.svg" alt="">
                    </span>
                    <input type="password" class="form-control pass-swap" placeholder="รหัสผ่าน">
                      <span class="input-group-text input-group-append" id="inputGroupPrepend">
                              <i class="fa fa-eye icon_eye"></i>
                      </span>
                </div>
              </div>
         </div>
        <div class="row">
            <div class="col-xl-12 text-center">
                <button type="button" class="btn btton_login">เข้าสู่ระบบ</button>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-2 ">
            <div class="me-2">
                <h6 data-bs-toggle="modal" data-bs-target="#register" data-bs-dismiss="modal"> 
                    ลงทะเบียน
                </h6>
            </div>
            <div class="me-2">
                <h6>
                    |
                </h6>
            </div>
            <div class="me-2">
                <h6 data-bs-toggle="modal" data-bs-target="#password" data-bs-dismiss="modal">
                   ลืมรหัสผ่าน
                </h6>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal ลงทะเบียน -->
<div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
          <div class="row">
               <div class="col-xl-12 text-center">
                    <h4>ลงทะเบียน</h4>
               </div>
          </div>
          <div class="row">
                <div class="col-xl-12 text-center">
                    <input type="text" class="form-control" id="#" placeholder="เลขประจำตัวประชาชน">
                    <small class="mark_red">
                       *กรุณากรอกเลขบัตรประชาชนของคุณเราจะทำการส่งรหัส OTP ไปยังเบอร์โทรศัพท์ของคุณ
                    </small>
                </div>
          </div>
      </div>
      <div class="row">
            <div class="col-xl-12 text-center">
                <button type="button" data-bs-toggle="modal" data-bs-target="#otp" data-bs-dismiss="modal" class="btn btn_otp">ยืนยัน</button>
            </div>
        </div>
    </div>
  </div>
</div>


<!-- Modal ลึมรหัสผ่าน -->
<div class="modal fade" id="password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
          <div class="row">
               <div class="col-xl-12 text-center">
                    <h4>ลืมรหัสผ่าน</h4>
               </div>
          </div>
          <div class="row">
                <div class="col-xl-12 text-center">
                    <input type="text" class="form-control" id="#" placeholder="เลขประจำตัวประชาชน">
                    <small class="mark_red">
                       *กรุณากรอกเลขบัตรประชาชนของคุณเราจะทำการส่งรหัส OTP ไปยังเบอร์โทรศัพท์ของคุณ
                    </small>
                </div>
          </div>
      </div>
      <div class="row">
            <div class="col-xl-12 text-center">
                <button type="button" data-bs-toggle="modal" data-bs-target="#otp" data-bs-dismiss="modal" class="btn btn_otp">ยืนยัน</button>
            </div>
        </div>
    </div>
  </div>
</div>


<!-- Modal otp -->
<div class="modal fade" id="otp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
          <div class="row">
               <div class="col-xl-12 text-center">
                    <h4>กรอกเลข OTP</h4>
               </div>
          </div>
          <div class="row">
                <div class="col-xl-12 text-center">
                    <input type="text" class="form-control" id="#" placeholder="รหัส OTP">
                    <small class="mark_red">
                        *กรุณากรอกรหัส OTP ที่ส่งไปยังเบอร์โทรศัพท์ <br> 089-2XXX-XX33
                    </small>
                </div>
          </div>
      </div>
      <div class="row">
            <div class="col-xl-12 text-center"> 
                <button type="button" data-bs-toggle="modal" data-bs-target="#reset_password" data-bs-dismiss="modal"  class="btn btn_otp">ตั้งค่ารหัสผ่านใหม่</button>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- Modal  ใส่รหัสผ่านใหม่ -->
<div class="modal fade" id="reset_password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
          <div class="row">
               <div class="col-xl-12 text-center">
                    <h4>ใส่รหัสผ่านใหม่</h4>
               </div>
          </div>
          <div class="row">
            <div class="col-xl-12 mb-2">
                <input type="text" class="form-control pass-swap" placeholder="รหัสผ่าน">
            </div>
         </div>
          <div class="row">
            <div class="col-xl-12">
                <div class="input-group has-validation mb-1">
                    <input type="password" class="form-control pass-swap" placeholder="ยืนยันรหัสผ่าน">
                      <span class="input-group-text input-group-append" id="inputGroupPrepend">
                              <i class="fa fa-eye icon_eye"></i>
                      </span>
                </div>
              </div>
         </div>
      </div>
      <div class="row">
            <div class="col-xl-12 text-center"> 
                <button type="button" data-bs-toggle="modal" data-bs-target="#message_alert" data-bs-dismiss="modal"   class="btn btn_otp">ตกลง</button>
            </div>
        </div>
    </div>
  </div>
</div>



<!-- Modal แจ้งเตือน -->
<div class="modal fade" id="message_alert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                     <p> ระบบได้ทำการส่งรหัสผ่านใหมเรียบร้อยแล้ว</p>
               </div>
          </div>
      </div>
    </div>
  </div>
</div>




<script type="text/javascript">
$(function(){
     // กรณีใช้ร่วมกับ bootstrap และ fontawesome 
     $(document.body).on("click","[class*='fa-eye']",function(){
         $(this).toggleClass("fa-eye-slash fa-eye");  
         let ele = $(this).closest(".input-group-append").siblings(".pass-swap");
         let swap_attr = (ele.attr("type")=="password")?"text":"password";
         ele.attr("type",swap_attr);         
     });     
});
</script>