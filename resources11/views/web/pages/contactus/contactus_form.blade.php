<div class="col-md-7 col-sm-12">
    <div class="div-strip border pb-3">
        <div class="border rounded text-center" style="background-color: #f3f3f3;">
            <h5 class="mt-1 fw-bold">Contact</h5>
        </div>
        <div class="mx-3">
            <form class="row g-3" action="{{ url('/') }}/contact" name="myForm" onsubmit="return validateForm()"
                method="post">
                <div class="col-md-12 mt-4">
                    <p>Have questions? Need help? Interested in advertising on our sites? We'd love to hear from you!
                        Please fill out the form below and we'll be in touch.</p>
                </div>
                <!--display error massage for user -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!--  Display success massage for user -->

                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="col-md-12">
                    <label for="inputName4" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="inputName4"
                        oninput="removeValidationError('inputName4')">
                    <p class="formerror" id="inputName4Error"></p>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4"
                        oninput="removeValidationError('inputEmail4')">
                    <p class="formerror" id="inputEmail4Error"></p>
                </div>
                <div class="col-12">
                    <label for="inputSocialAdd" class="form-label">Skype / Telegram (separated using commas)</label>
                    <input type="text" name="skype" class="form-control" id="inputSocialAdd"
                        oninput="removeValidationError('inputSocialAdd')">
                    <p class="formerror" id="inputSocialAddError"></p>
                </div>
                <div class="col-12">
                    <label for="inputSubject" class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control" id="inputSubject"
                        oninput="removeValidationError('inputSubject')">
                    <p class="formerror" id="inputSubjectError"></p>
                </div>
                <div class="col-md-12">
                    <label for="exampleMessage" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="exampleMessage" rows="3"
                        oninput="removeValidationError('exampleMessage')"></textarea>
                    <p class="formerror" id="exampleMessageError"></p>
                </div>
                <div class="col-12">
                    <label>Captcha</label>
                    <div class="form-check border">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            I’m not a Robot
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" style="background-color: #2C1B47;">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
