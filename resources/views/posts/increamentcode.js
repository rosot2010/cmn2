<script>
$('button').onclick(){

    DB::table('votes')->increment('count', 1);   
}
</script>
<script>
function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}
</script>