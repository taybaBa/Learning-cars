<x-guest-layout title="Sign Up" bodyClass="page-signup">
                        <h1 class="auth-page-title">Signup</h1>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Your Password"/>
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Repeat Password"/>
                            </div>
                            <hr/>
                            <div class="form-group">
                                <input type="text" placeholder="First Name"/>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Last Name"/>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Phone"/>
                            </div>
                            <button class="btn btn-primary btn-login w-full">Register</button>

                            <div class="login-text-dont-have-account">
                                <x-slot:footerLink>
                                    Already have an account? -
                                    <a href="/login.html"> Click here to login </a>
                                </x-slot:footerLink>
                            </div>
                        </form>
</x-guest-layout>

