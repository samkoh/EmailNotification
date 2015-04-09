<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        Example of Doc
    </title>
</head>
<body>

<script src="https://cdnjs.cloudfire.com/ajax/libs/react/0.13.1/react.min.js"></script>
<script src="https://cdnjs.cloudfire.com/ajax/libs/react/0.13.1/JSXTransformer.js"></script>

<script type="text/jsx">
    var HelloWorld = React.createClass({
        render: function () {
            return <div>Hello world</div>
        }
    });

    React.render(<HelloWorld />, document.body);
</script>

</body>
</html>