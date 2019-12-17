@extends("layouts.main")

@section("title","Create Data")

@section("css")
<style>
  .form-wrapper{
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: center;
    -ms-align-items: center;
    align-items: center;
    vertical-align: middle;
    height: 100vh;
  }
</style>
@endsection

@section("content")

<div class="container">
  <div class="row form-wrapper">
    <div class="col-md-5 mx-auto">
      <h1>Edit Data</h1>
      <form method="post" action="/">
        @csrf
        @method("patch")
		<input type="hidden" name="id" value="{{$user->id}}">

        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="inputName">Nama</label>
            <input type="text" value="{{$user->name}}" class="form-control" id="inputName" placeholder="Nama" name="name">
          </div>
          <div class="form-group col-md-12">
            <label for="inputEmail4">Email</label>
            <input type="email" value="{{$user->email}}" class="form-control" id="inputEmail4" placeholder="Email" name="email">
          </div>
          <div class="form-group col-md-3">
            <label for="inputAge">Usia</label>
            <input type="number" value="{{$user->age}}" class="form-control" id="inputAge" placeholder="Usia" name="age">
          </div>
           <div class="form-group col-md-6">
            <label for="inputBorn">Tanggal Lahir</label>
            <input type="date" value="{{$user->born}}" class="form-control" id="inputBorn" placeholder="Tanggal Lahir" name="born">
          </div>
           <div class="form-group col-md-3">
            <label for="inputHobby">Hobbi</label>
            <input type="text" value="{{$user->hobby}}" class="form-control" id="inputHobby" placeholder="Hobbi" name="hobby">
          </div>
          <div class="form-group col-md-12">
            <label for="inputPassword4">Password</label>
            <input type="password" value="{{$user->password}}" class="form-control" id="inputPassword4" placeholder="Password" name="password">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Alamat</label>
          <input type="text" value="{{$user->address}}" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="/">Kembali</a>
        
      </form>
    </div>
  </div>
</div>

@endsection