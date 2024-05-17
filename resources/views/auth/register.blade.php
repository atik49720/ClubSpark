@include('./../include/header')
<title>Register - ClubSpark</title>
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">ClubSpark Register</h3>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Name -->
                            <div class="form-group">
                                <div class="position-relative">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Student ID -->
                            <div class="form-group">
                                <div class="position-relative">
                                    <x-input-label for="studentId" :value="__('Student ID')"/>
                                    <x-text-input id="studentId" class="form-control" type="text" name="studentId" :value="old('studentId')" required autofocus autocomplete="studentId" />
                                    <x-input-error :messages="$errors->get('studentId')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Mobile -->
                            <div class="form-group">
                                <div class="position-relative">
                                    <x-input-label for="mobile" :value="__('Mobile')"/>
                                    <x-text-input id="mobile" class="form-control" type="number" name="mobile" :value="old('mobile')" required autofocus autocomplete="mobile" />
                                    <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Batch -->
                            <div class="form-group">
                                <div class="position-relative">
                                    <x-input-label for="batch" :value="__('Batch')"/>
                                    <x-text-input id="batch" class="form-control" type="number" max="100" name="batch" :value="old('batch')" required autofocus autocomplete="batch" />
                                    <x-input-error :messages="$errors->get('batch')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Dept -->
                            <div class="form-group">
                                <div class="position-relative">
                                    <x-input-label for="dept" :value="__('Department')"/>
                                    <select id="dept" class="form-control" name="dept" :value="old('dept')" required autofocus autocomplete="dept">
                                        <option>Select Option</option>
                                        <option value="CSE">CSE</option>
                                        <option value="EEE">EEE</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('dept')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="form-group">
                                <div class="position-relative">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <div class="position-relative">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="form-control"
                                                  type="password"
                                                  name="password"
                                                  required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <div class="position-relative">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-text-input id="password_confirmation" class="form-control"
                                                  type="password"
                                                  name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="font-bold" style="font-size: 20px;" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                                &nbsp;&nbsp;
                                <x-primary-button class="btn btn-primary me-1 mb-1">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('./../include/footer')
