<x-app-layout>
<div style="background-color: blue">
    <h1> admin Dashboard </h1>
</div>
<div>
    <foam action="{{url("/addseller")}}" method="POST">
        @csrf
        <div>
            <lable>Name</lable>
            <input type = "text" name="name" required="">
        </div>
        <div>
            <lable>Email</lable>
            <input type = "email" name="email" required="">
        </div>
        <div>
            <lable>password</lable>
            <input type = "password" name="password" required="">
        </div>
        <div>
            <input type="submit">
        </div>
    </foam>
</div>
   
</x-app-layout>

