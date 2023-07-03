<h1>{{$createList}}</h1>
<form action="/todo/submit" method="post">
    <div class="form-group">
        <label for="title" class="label label-title">Введите название задачи</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Ваша новая задача">

        <label for="description" class="label label-description">Введите описание задачи</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="Ваше описание задачи">

        <button type="submit" class="btn btn-success">Сохранить задачу</button>
    </div>
</form>
