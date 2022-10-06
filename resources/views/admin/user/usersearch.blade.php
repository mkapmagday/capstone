<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('How to use this feature?') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('user.filter') }}">

                <div class="row" style="margin-left:150px; margin-top: 20px">
                    <div class="col">
                        <input value="{{$name}}" type="text" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="col">
                        <input value="{{$email}}" type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>

                    <div class="col">
                        <button class="open-button" style="background-color: #228B22; color: white;" type="submit">Filter</button>
                        <form action="{{ route('user.index') }}">
                            <button class="open-button" style="background-color: #0047AB; color: white;" type="submit">Clear Filter</button>
                        </form>
                    </div>
                </div>
            </form>
            <br>
            <br>

                <div class="popup">
                    <div class="cnt223">
                    <a href='' class='close'><img src="https://img.icons8.com/color/48/000000/delete-sign--v1.png" /></a>

                        <form method="POST" action="{{ route('user.store') }}">
                            @csrf

                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Name')" />

                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />

                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="ml-4">
                                    {{ __('Create User') }}
                                </x-primary-button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200 " align="center">
                        <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Email</th>
                                <th scope="col" colspan="3" style="text-align:center;" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                            </tr>

                            @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{$user->id}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
                                <td class="px-6 py-4 text-sm">
                                    <form action="{{ route('role.show',$user->id) }}">
                                        <button class="open-button" style="background-color: #4F7942; color: white;" type="submit">Roles</button>
                                    </form>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <form action="{{ route('user.edit',$user->id) }}">
                                        <button class="open-button" style="background-color: #0047AB; color: white;" type="submit">Edit</button>
                                    </form>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="open-button" style="background-color: #8B0000; color: white;" onclick="return confirm('Do you want to delete? ')" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            {{ $users->links() }}


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    .close {
        float: right;
        width: 20px;
        height: 20px;
    }

    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        filter: alpha(opacity=70);
        -moz-opacity: 0.7;
        -khtml-opacity: 0.7;
        opacity: 0.7;
        z-index: 100;
        display: none;
    }

    .popup {
        padding-top: 10px;
        display: none;
        position: absolute;
        right:35%;

        z-index: 101;
    }

    .cnt223 {
        min-width: 600px;
        width: 600px;
        min-height: 150px;
        margin: 100px auto;
        background: #f3f3f3;
        position: relative;
        z-index: 103;
        padding: 15px 35px;
        border-radius: 5px;
        box-shadow: 0 2px 5px #000;
    }

    .cnt223 p {
        clear: both;
        color: #555555;
        /* text-align: justify; */
        font-size: 20px;
        font-family: sans-serif;
    }

    .cnt223 p a {
        color: #d91900;
        font-weight: bold;
    }

    .cnt223 .x {
        float: right;
        height: 35px;
        left: 22px;
        position: relative;
        top: -25px;
        width: 34px;
    }

    .cnt223 .x:hover {
        cursor: pointer;
    }
</style>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<script type='text/javascript'>
    function openForm() {
        $(function() {
            var overlay = $('<div id="overlay"></div>');
            overlay.show();
            overlay.appendTo(document.body);
            $('.popup').show();
            $('.close').click(function() {
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });

            $('.x').click(function() {
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });
        });
    }
</script>

<style>
    .open-button {
        border-radius: 100px;
        box-shadow: green;
        cursor: pointer;
        display: inline-block;
        font-family: CerebriSans-Regular, -apple-system, system-ui, Roboto, sans-serif;
        padding: 7px 20px;
        text-align: center;
        text-decoration: none;
        transition: all 250ms;
        border: 0;
        font-size: 16px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;

    }

    .open-button:hover {
        transform: scale(1.05) rotate(-1deg);
    }
</style>