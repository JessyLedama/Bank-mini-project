<form action="" method="POST">

    {{ csrf_field() }}

    <label> Deposit Amount: </label>

    <input type="number"  name="amount">

    <button type="submit"> Deposit </button>

</form>

<a href="/"> Home </a>