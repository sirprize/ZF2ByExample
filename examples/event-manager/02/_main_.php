<?php

namespace ZF2ByExample\SignalSlot\Ex02;

function _main_() {

    $ph = new PluginHandler();
    $ph->register(new MyPlugin());
    
    $sd = new Dispatcher($ph);
    $sd->dispatch();

}

_main_();