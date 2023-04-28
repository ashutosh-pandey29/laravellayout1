<x-layout>
    <x-slot name='title'>Contact</x-slot>
    <x-slot name="content">
        <section class="container">
            <div class="row mt-4">
                <div class="col-12">
                    <h2 class="text-center text-primary">
                        Contact Us
                        <hr>
                    </h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <label for="name" class="form-label">Name : </label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label for="email" class="form-label">Email : </label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label for="subject" class="form-label">Subject : </label>
                                <input type="text" name="subject" id="subject" class="form-control" required>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-12">
                                <label for="subject" class="form-label">Subject : </label>
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control" required></textarea>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <input type="submit" value="Send" class="btn btn-primary" disabled>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </section>
    </x-slot>
</x-layout>
