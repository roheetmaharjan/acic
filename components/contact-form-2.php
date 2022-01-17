<div class="login-content">
    <form action="">
        <div class="form-group">
            <div class="div">
                <h5>Username</h5>
                <input type="text" class="form-control form-control-lg">
            </div>
        </div>
        <div class="form-group">
            <div class="div">
                <h5>Password</h5>
                <input type="password" class="form-control form-control-lg">
            </div>
        </div>
    </form>
</div>
<style>
    .form-group>div {
        position: relative;
    }

    .form-group>div>h5 {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 18px;
        transition: .3s;
    }

    .form-group:before {
        right: 50%;
    }

    .form-group:after {
        left: 50%;
    }

    .form-group.focus:before,
    .form-group.focus:after {
        width: 50%;
    }

    .form-group.focus>div>h5 {
        top: -5px;
        font-size: 15px;
    }
</style>