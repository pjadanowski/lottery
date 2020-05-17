@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/styles/atom-one-dark.min.css" integrity="sha256-91Q4dP2FrFQCLpK/8fPlQyatehNmhUOXKRFM1CtE7Sw=" crossorigin="anonymous" />
@endsection

@section('content')
    <div class="container">
        <h2>Zadanie 3</h2>
        <div class="row justify-content-center">
            <pre>
<code class="language-sql">
select COUNT(*) from `lottery_tickets`
where timezone = :timezone
and (
    exists (
        select * from `lotteries` where `lottery_tickets`.`lottery_id` = `lotteries`.`id`
        and `timezone` = :timezone )
    and `created_at` >= '2020-03-20'
)
</code>
            </pre>
        </div>
    </div>
@endsection


@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/highlight.min.js" integrity="sha256-/2C3CAfmuTGkUqK2mVrhkTacBscoR1caE0u2QZZ3Uh8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/languages/sql.min.js" integrity="sha256-DEqqRlxqScfFq1ZdheNgLJDxwe8neqzO9dZ3otPkKRs=" crossorigin="anonymous"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@endsection
