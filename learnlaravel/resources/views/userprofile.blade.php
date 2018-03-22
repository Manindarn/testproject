<h2>User Profile</h2>
@foreach ($users as $user) 
     {{$user->name}}<br/>
     {{$user->email}}
@endforeach