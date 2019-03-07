$(document).ready(function(){
$('input.typeahead').typeahead({
    name: 'Search',
    remote:'live.php?key=%QUERY',
    limit : 10
});
});
