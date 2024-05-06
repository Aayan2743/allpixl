<div>
    {{-- The whole world belongs to you. --}}

    <div class="container py-5">
        <div class="row">
            <div class="col-md-4"></div>
            <form wire:submit.prevent="Logincheck">
                <div class="col-md-8 py-5 px-1">
                    <div class="card" style="padding: 30px;">
                        <img src="images/logoo.svg" class="login-card mt-4 px-5">
                        <h3 class="Pay-jet-login-card-heading mt-4">Welcome to PayJet Login </h3>
                        <label for="email" class="form-label">Mobile Number / Email id</label>
                        <input
                            type="text"
                            class="form-control"
                            id="email"
                            placeholder="Enter Mobile number / Email id"
                            aria-describedby="emailHelp"
                            wire:model="email">
                        <label for="password" class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            placeholder="Enter Password"
                            aria-describedby="emailHelp"
                            wire:model="password">
                        <div class="row text-end mt-3">
                            <span class="Pay-jet-login-card mt-3">
                                <a href="" style="color: #FF7A2F;">Forgot Password ?</a>
                            </span>
                        </div>
                        <button type="submit" class="btn btn-danger mt-4 w-100">
                            Sign In
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
