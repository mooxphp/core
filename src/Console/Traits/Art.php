<?php

namespace Moox\Core\Console\Traits;

use function Laravel\Prompts\info;

trait Art
{
    public function art(): void
    {
        info('

        <fg=#661194>▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓</> <fg=#661194>▓▓▓▓▓▓▓▓▓▓▓</>       <fg=#661194>▓▓▓▓▓▓▓▓▓▓▓▓</>           <fg=#661194>▓▓▓▓▓▓▓▓▓▓▓▓</>   <fg=#661194>▓▓▓▓▓▓▓</>        <fg=#661194>▓▓▓▓▓▓▓</>
        <fg=#661194>▓▓</><fg=#0f5fb7>▒░░</><fg=#661194>▒▓▓</><fg=#0f5fb7>▒▒░░░░░░▒▒</><fg=#661194>▓▓▓</><fg=#0f5fb7>▒░░░░░░░</><fg=#661194>▒▓▓</>   <fg=#661194>▓▓▓▓</><fg=#0f5fb7>▒░░░░░░░</><fg=#661194>▒▓▓▓▓</>     <fg=#661194>▓▓▓▓▓</><fg=#0f5fb7>▒░░░░░░░▒▒</><fg=#661194>▓▓▓▓▓</><fg=#0f5fb7>▒▒▒▒</><fg=#661194>▓▓</>      <fg=#661194>▓▓▓</><fg=#0f5fb7>▒▒▒▒</><fg=#661194>▓▓</>
        <fg=#661194>▓</><fg=#0f5fb7>▒░░░░░░░░░░░░░░░░░░░░░░░░░░░░░</><fg=#661194>▓▓▓▓▓</><fg=#0f5fb7>▒░░░░░░░░░░░░░</><fg=#661194>▒▓▓▓</> <fg=#661194>▓▓▓▓</><fg=#0f5fb7>▒░░░░░░░░░░░░░</><fg=#661194>▒▓▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▒▓▓</>   <fg=#661194>▓▓</><fg=#0f5fb7>▒░░░░░</><fg=#661194>▓▓</>
        <fg=#661194>▓</><fg=#0f5fb7>▒░░░░░░</><fg=#661194>▒▓▓▓▓</><fg=#0f5fb7>▒░░░░░░░</><fg=#661194>▒▓▓▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▒▓▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▒▓▓▓▓</><fg=#0f5fb7>▒░░░░░░░</><fg=#661194>▓▓▓▓</><fg=#0f5fb7>░░░░░░</><fg=#661194>▒▓▓▓▓▓</><fg=#0f5fb7>░░░░░░</><fg=#661194>▒▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▒▓▓▓▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▒▓▓</>
        <fg=#661194>▓</><fg=#0f5fb7>▒░░░░</><fg=#661194>▓▓▓  ▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▓▓▓  ▓▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓▓▓   ▓▓▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▓</><fg=#0f5fb7>░░░░░░</><fg=#661194>▓▓▓▓   ▓▓▓</><fg=#0f5fb7>▒░░░░</><fg=#661194>▓▓▓</><fg=#0f5fb7>▒░░░░░</><fg=#661194>▓▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▓▓▓</>
        <fg=#661194>▓</><fg=#0f5fb7>▒░░░░</><fg=#661194>▒▓    ▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▓▓    ▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓▓        ▓▓▓</><fg=#0f5fb7>░░</><fg=#661194>▒</><fg=#0f5fb7>░░░░░</><fg=#661194>▓▓▓        ▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓▓▓▓</><fg=#0f5fb7>░░░░░░░░░░░</><fg=#661194>▓▓</>
        <fg=#661194>▓</><fg=#0f5fb7>▒░░░░</><fg=#661194>▒▓    ▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▓▓    ▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓          ▓▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▒▓▓          ▓▓</><fg=#0f5fb7>▒░░░░</><fg=#661194>▓ ▓▓▓</><fg=#0f5fb7>░░░░░░░░░</><fg=#661194>▓▓</>
        <fg=#661194>▓</><fg=#0f5fb7>▒░░░░</><fg=#661194>▒▓    ▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▓▓    ▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓▓        ▓▓</><fg=#0f5fb7>▒░░░░░</><fg=#661194>▒</><fg=#0f5fb7>░░</><fg=#661194>▒▓▓        ▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓▓▓</><fg=#0f5fb7>▒░░░░░</><fg=#661194>▒</><fg=#0f5fb7>░░░░░</><fg=#661194>▒▓</>
        <fg=#661194>▓</><fg=#0f5fb7>▒░░░░</><fg=#661194>▒▓    ▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▓▓    ▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓▓▓   ▓▓▓</><fg=#0f5fb7>▒░░░░░</><fg=#661194>▒▒</><fg=#0f5fb7>░░░░░</><fg=#661194>▒▓▓▓   ▓▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▓▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▒▓▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▒▓▓</>
        <fg=#661194>▓</><fg=#0f5fb7>▒░░░░</><fg=#661194>▒▓    ▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▓▓    ▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓▓▓</><fg=#0f5fb7>░░░░░░</><fg=#661194>▒▒▓▓</><fg=#0f5fb7>▒░░░░░░</><fg=#661194>▒▓▓▓▓</><fg=#0f5fb7>░░░░░░░</><fg=#661194>▒▒▓▓</><fg=#0f5fb7>▒░░░░░░</><fg=#661194>▓▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▒▓▓▓▓▓</><fg=#0f5fb7>▒░░░░░</><fg=#661194>▓▓</>
        <fg=#661194>▓</><fg=#0f5fb7>▒░░░░</><fg=#661194>▒▓    ▓▓</><fg=#0f5fb7>░░░░░</><fg=#661194>▓▓    ▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓▓▓▓</><fg=#0f5fb7>▒░░░░░░░░░░░░░</><fg=#661194>▒▓▓▓ ▓▓▓▓</><fg=#0f5fb7>▒░░░░░░░░░░░░░</><fg=#661194>▒▓▓</><fg=#0f5fb7>▒░░░░░</><fg=#661194>▓▓▓   ▓▓</><fg=#0f5fb7>▒░░░░░</><fg=#661194>▒▓</>
        <fg=#661194>▓▓</><fg=#0f5fb7>░░░</><fg=#661194>▒▓▓    ▓▓</><fg=#0f5fb7>▒░░░</><fg=#661194>▒▓▓    ▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▓▓  ▓▓▓▓</><fg=#0f5fb7>▒░░░░░░</><fg=#661194>▒▒▓▓▓▓     ▓▓▓▓▓</><fg=#0f5fb7>▒▒░░░░░</><fg=#661194>▒▒▓▓▓▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓▓      ▓▓▓</><fg=#0f5fb7>░░░░</><fg=#661194>▒▓</>
        <fg=#661194>▓▓▓▓▓▓▓      ▓▓▓▓▓▓▓     ▓▓▓▓▓▓▓▓    ▓▓▓▓▓▓▓▓▓▓▓▓           ▓▓▓▓▓▓▓▓▓▓▓▓  ▓▓▓▓▓▓▓▓        ▓▓▓▓▓▓▓▓</>

        ');
    }
}
