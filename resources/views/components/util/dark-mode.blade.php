<button {{ $attributes->class([ 'button bg-dark-600 dark:bg-white fixed z-50 bottom-1/2 right-8 drop-shadow-2xl rounded-full p-3 flex items-center justify-center scale-90' ]) }} id="darkMode">
    <i {{ $attributes->merge(['class' => 'material-icons text-white dark:text-dark-600 text-xs']) }} id="icon_figure">brightness_2</i>
</button>