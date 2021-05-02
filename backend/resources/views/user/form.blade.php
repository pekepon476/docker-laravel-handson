<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>会員登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @if($target == 'store')
            <form action="/user" method="post">
            @elseif($target == 'update')
            <form action="/user/{{ $user->id }}" method="post">
                <input type="hidden" name="_method" value="PUT">
            @endif
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="PS_ID">PS_ID</label>
                    <input type="text" class="form-control" name="PS_ID" value="{{ $user->PS_ID }}">
                </div>
                <div class="form-group">
                    <label for="PS">PS</label>
                    <input type="text" class="form-control" name="PS" value="{{ $user->PS }}">
                </div>
                <div class="form-group">
                    <label for="name">名前</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/book">戻る</a>
            </form>
        </div>
    </div>
</div>