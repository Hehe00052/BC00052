<!DOCTYPE html>
<html>
<head>
    <title>Edit Need Help Item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>


    </style>
</head>
<body>
@include('header')
<div class="formbold-main-wrapper">
    <div class="formbold-form-wrapper">
        <form method="POST" action="{{  route('admin.update', $item->id)}}" enctype="multipart/form-data">
         @csrf
         @method('PUT')
        <div  class="formbold-input-flex">
            <div>
            <h2 style="text-align:center">Edit Need Help Item</h2>
            </div><br>
         <div>
         <label for="name" class="formbold-form-label"><b>Name:</b></label>
         <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
         </div>
         <div><br>
         <label for="name" class="formbold-form-label">Email:</label>
         <input type="email" class="form-control" id="email" name="email" value="{{ $item->email }}">
         </div><br>
         <div>
         <label for="name" class="formbold-form-label">Message:</label>
         <textarea class="form-control" id="message" name="message">{{ $item->message }}</textarea>
         </div><br>
            <div>
                <button type="submit" class="btn btn-primary" >Update</button>
            </div>


            </form>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
  }
  .formbold-mb-3 {
    margin-bottom: 15px;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
  }

  .formbold-img {
    display: block;
    margin: 0 auto 45px;
  }

  .formbold-input-wrapp > div {
    display: flex;
    gap: 20px;
  }

  .formbold-input-flex {
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 100%;
  }
  .formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: black;
    outline: none;
    resize: none;
  }
  .formbold-form-input::placeholder,
  select.formbold-form-input,
  .formbold-form-input[type='date']::-webkit-datetime-edit-text,
  .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
  .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
  .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
    color: rgba(83, 99, 135, 0.5);
  }

  .formbold-form-input:focus {
    border-color: black;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: black;
    font-weight: 500;
    font-size: 15px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-form-file-flex {
    display: flex;
    align-items: center;
    gap: 20px;
  }
  .formbold-form-file-flex .formbold-form-label {
    margin-bottom: 0;
  }
  .formbold-form-file {
    font-size: 14px;
    line-height: 24px;
    color: black;
  }
  .formbold-form-file::-webkit-file-upload-button {
    display: none;
  }
  .formbold-form-file:before {
    content: 'Upload file';
    display: inline-block;
    background: #EEEEEE;
    border: 0.5px solid #FBFBFB;
    box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.25);
    border-radius: 3px;
    padding: 3px 12px;
    outline: none;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
    color: black;
    font-weight: 500;
    font-size: 12px;
    line-height: 16px;
    margin-right: 10px;
  }

  .formbold-btn {
    text-align: center;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-w-45 {
    width: 45%;
  }
</style>
