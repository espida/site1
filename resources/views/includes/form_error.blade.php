@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger alert-dismissable fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

        <strong>خطایی رخ داده است</strong>

        <br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif