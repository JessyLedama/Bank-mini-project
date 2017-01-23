<form action="" method="POST">

    {{ csrf_field() }}

    <label> Withdrawal Amount: </label>

    <input type="number" name="amount">

    <button type="submit"> Withdraw </button>

</form>

<a href="/"> Home </a>