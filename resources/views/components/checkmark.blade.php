<div {{ $attributes->class('inline-block w-[18px] h-[18px] bg-gray-50 rounded border flex items-center justify-center') }} {{ $attributes->except('checked', 'class') }}>
    @if($checked)
    <svg viewBox="0 0 18 18" fill="currentColor" width="18" height="18"><use href="#icon-checkmark" /></svg>
    @endif
</div>
