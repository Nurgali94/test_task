<div class="wrapper container-fluid">
    <form method="POST" action="{{route('newsAdd')}}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="col-xs-2 control-label">Название</label>
            <div class="col-xs-8">
                <input class="form-control" placeholder="Введите название новости" name="name" type="text" id="name" value="{{old('name')}}">
            </div>
        </div>
        @if($cat)
        <div class="form-group">
            <label for="cat" class="col-xs-2 control-label">Категория</label>
            <div class="col-xs-8">
                <select name="category_id" id="category_id">
                    <?php foreach ($cat as $ct): ?>
                    <option value="{{$ct->id}}">{{$ct->name}}</option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        @endif
        <div class="form-group">
            <label for="description" class="col-xs-2 control-label">Описание:</label>
            <div class="col-xs-8">
                <textarea id="editor" class="form-control" placeholder="Введите текст страницы" name="description" cols="50" rows="10" style="visibility: hidden; display: none;">{{old('description')}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="images" class="col-xs-2 control-label">Аватарка:</label>
            <div class="col-xs-8">
                <input class="filestyle" data-buttontext="Выберите изображение" data-buttonname="btn-primary" data-placeholder="Файла нет" name="image" type="file" id="image" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-primary" type="submit">Сохранить</button>
            </div>
        </div>
    </form>

    <script>
        CKEDITOR.replace('editor');
    </script>

</div>