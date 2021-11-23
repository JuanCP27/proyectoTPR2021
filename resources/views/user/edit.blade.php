<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuario') }}
        </h2>
    </x-slot>
   




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
				<div class="mt-10 sm:mt-0">
					<div class="md:grid md:grid-cols-3 md:gap-6">
					  <div class="md:col-span-1">
						<div class="px-12 py-12 sm:px-12">
						  <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
						  <p class="mt-1 text-sm text-gray-600">
							Use a permanent address where you can receive mail.
						  </p>
						</div>
					  </div>
					  <div class="mt-5 md:mt-0 md:col-span-2">
						@if (count($errors) > 0)
						<div class="alert alert-danger">
						  <strong>Whoops!</strong> There were some problems with your input.<br><br>
						  <ul>
							 @foreach ($errors->all() as $error)
							   <li>{{ $error }}</li>
							 @endforeach
						  </ul>
						</div>
					  @endif
				

						{!! Form::model($user, ['method' => 'PATCH','route' => ['user.update', $user->id]]) !!}

						  <div class="shadow overflow-hidden sm:rounded-md">
							<div class="px-4 py-5 bg-white sm:p-6">
							  <div class="grid grid-cols-6 gap-6">



								<div class="col-span-6 sm:col-span-3">
								  <label  class="block text-sm font-medium text-gray-700">Nombres</label>
								  {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
       
								  <input type="text" name="nombres"  autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								</div>
				  
							
								<div class="col-span-6 sm:col-span-4">
								  <label  class="block text-sm font-medium text-gray-700">Correo electrónico</label>
								  {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
								</div>

				  
								<div class="col-span-6 sm:col-span-3">
								  <label  class="block text-sm font-medium text-gray-700">Roles</label>
								 {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        
								  <select id="country"  autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
									<option>United States</option>
									
								  </select>
								</div>
				  

								<div class="col-span-6 sm:col-span-6 lg:col-span-2">
								  <label for="city" class="block text-sm font-medium text-gray-700">Password</label>
								  {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
								  {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
         
								  <input class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
								</div>


							  </div>
							</div>
							<div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
							  <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
								Save
							  </button>
							</div>
						  </div>
						</form>
					  </div>
					</div>
				  </div>

            
            </div>
        </div>
    </div>
</x-app-layout>


@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif





		<div class="form-group">
           <label for=""> Foto del docente</label>
			
			<input type="file" accept = "jpg, png, gif, jpeg" name="avatar">
		</div>