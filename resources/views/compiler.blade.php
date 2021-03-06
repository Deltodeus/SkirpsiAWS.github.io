@extends('layout.layoutUser')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <title>
        Embedding an online compiler
        into a website
    </title>
</head>

<body>
    {{-- ini untuk compiler C --}}
    <div data-pym-src="http://tpcg.io/3SMN0E">
    </div>
    {{-- ini untuk compiler Python --}}
    <div data-pym-src="https://www.jdoodle.com/iembed/v0/k7h">
    </div>

    {{-- ini untuk compiler php --}}
    <div data-pym-src="https://www.jdoodle.com/iembed/v0/k7d">
    </div>

    <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript">
    </script>
</body>

</html>

@endsection
