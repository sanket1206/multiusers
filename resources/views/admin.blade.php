<x-app-layout>
<div style="background-color: blue">
    <h1> admin Dashboard </h1>
</div>
<div>
    <form action="{{url("/addseller")}}" method="POST">
        @csrf
        <div>
            <label>Name</label>
            <input type = "text" name="name" required="">
        </div>
        <div>
            <label>Email</label>
            <input type = "email" name="email" required="">
        </div>
        <div>
            <label>password</label>
            <input type = "password" name="password" required="">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</div>
   
</x-app-layout>

