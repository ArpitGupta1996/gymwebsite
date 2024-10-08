<footer class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-3 footer1 d-flex wow bounceInLeft" data-wow-delay=".25s">
                <div class="d-flex flex-wrap align-content-center">
                    <a href="#"><img src="{{ asset('images/logo.png') }}" alt="logo" /></a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo dolor. Ae</p>
                    <p>&copy; 2018 Foxpro. All rights reserved.<br> Design by <a href="https://freehtml5.co"
                            target="_blank">FreeHTML5</a>.</p>
                </div>
            </div>
            <div class="col-md-6 footer2 wow bounceInUp" data-wow-delay=".25s" id="contact">
                <div class="form-box">
                    <h4>CONTACT US</h4>
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <form action="{{ route('home.store') }}" method="post">
                        @csrf
                        <table class="table table-responsive d-table">
                            <tr>
                                <td><input type="text" name="name" class="form-control pl-0" placeholder="NAME" />
                                </td>
                                <td><input type="email" name="email" class="form-control pl-0"
                                        placeholder="EMAIL" /></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="text" name="address" class="form-control pl-0"
                                        placeholder="ADDRESS" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="text" name="message" class="form-control pl-0"
                                        placeholder="MESSAGES" />
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center pl-0"><button type="submit"
                                        class="btn btn-dark">SEND</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class="col-md-3 footer3 wow bounceInRight" data-wow-delay=".25s">
                <h5>ADDRESS</h5>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                <h5>PHONE</h5>
                <p>253232323232</p>
                <h5>EMAIL</h5>
                <p>email@example.com</p>
                <div class="social-links">
                    <ul class="nav nav-item">
                        <li><a href="https://www.facebook.com/fh5co" class="btn btn-secondary mr-1 mb-2"><img
                                    src="{{ asset('images/facebook.png') }}" alt="facebook" /></a></li>
                        <li><a href="#" class="btn btn-secondary mr-1 ml-1 mb-2"><img
                                    src="{{ asset('images/facebook.png') }}" alt="facebook" /></a></li>
                        <li><a href="#" class="btn btn-secondary mr-1 ml-1 mb-2"><img
                                    src="{{ asset('images/facebook.png') }}" alt="facebook" /></a></li>
                        <li><a href="#" class="btn btn-secondary ml-1 mb-2"><img
                                    src="{{ asset('images/facebook.png') }}" alt="facebook" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
