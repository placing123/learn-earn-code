<form action="" method="POST">
    @csrf
    <label for="name">{{__('Permission Name:')}}</label>
    <input type="name" name="name" placeholder="permission name">
    <input type="submit" value="Create">
</form>