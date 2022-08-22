@extends('website.master')
@section('content')
<div class="tst-dynamic-menu text-center" id="tst-dynamic-menu">
      
    <img src="{{asset('assets/theme/img/logo-sm.svg') }} " class="tst-logo" alt="Tastyc">
    
  </div>

<div class="row">
      <div class="col-lg-12">
        <div class="container">
          <div class="wrapper">
            <h5>Đăng Ký Tài Khoản</h5>
              <form action="{{route('website.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="BoxInput">
                    <input type="text" class="group-input" name="fullname" placeholder="Điền Họ Và Tên Của Bạn" required="required">
                  </div>
                  <div class="BoxInput">
                    <input type="email" class="group-input" name="email" placeholder="Điền Email Của Bạn" required="required">
                  </div>
                  <div class="BoxInput">
                    <input type="password" class="group-input" name="password" placeholder="Mật Khẩu" required="required">
                  </div>
                  <div class="BoxInput">
                    <input type="password" class="group-input" name="password_confirmation" placeholder="Xác Nhận Mật Khẩu" required="required">
                  </div>
                  <div class="BoxInput">
                    <input class="b-submit" class="group-input" type="submit" name="resgister" value="Đăng Ký">
                  </div>
              </form>
          </div>
        </div>
      </div>
</div>
@endsection