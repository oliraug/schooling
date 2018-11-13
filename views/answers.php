<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>AngularJS Tutorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.4/angular.min.js"></script>
	<script type="text/javascript" src="C:/wamp/www/SpryAssets/angular.min.js"></script>

    <script src="App.js"></script>
    <script src="answers.controller.js"></script>
</head>
<body ng-app="app" ng-controller="AnswersController as answers">
<div class="container">
    <ul class="list-group">
        <li class="list-group-item" ng-repeat="answer in answers.answers">
		<span class="glyphicon glyphicon-user" ng-if="answer.user"></span> {{answer.answersBody}} <span class="badge">{{answer.size}}</span> <span class="badge">{{answer.answersDate}}</span></li>
    </ul>
    <select class="form-control pull-right" ng-model="main.order" ng-options="order as order.title for order in main.orders"></select>
    <div class="clearfix"></div>
    <form name="answers.addForm" class="form" ng-submit="answers.addAnswers()">
        <div class="form-group">
            <input type="text" class="form-control" ng-model="answers.answer.answersBody" placeholder="pliz respond" required />
        </div>
        <div class="row">
            <div class="col-xs-6">
                <button class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus-sign"></span> Answer</button>
            </div>
        </div>

    </form>
</div>
</body>
</html>