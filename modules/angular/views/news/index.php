<?php
//$this->title = \modules\seo\helpers\Meta::all('lease', $model);
?>

<div class="lease-default-index" data-ng-controller="AngularController">
    <div>
        <h1>Новости</h1>
        <div data-ng-show="results.length > 0">
            <div data-ng-repeat="row in results">
                <h3>{{row.title}}</h3>
                <p>Создано {{row.created_at}}</p>
                <div>{{row.content}}</div>
            </div>
        </div>
        <div data-ng-show="results.length == 0">
            Нету новостей
        </div>
    </div>
</div>
