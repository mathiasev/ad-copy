<ul role="list" class="space-y-6">
    @foreach($activity as $item)
    <x-activity.activity-item :item="$item" />
    @endforeach
</ul>