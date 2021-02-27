<div id="loading" class="loading">
    <div class="loading_1"></div>
    <div class="loading_2"></div>
    <div class="loading_3"></div>
</div>
<style>

    :root{
        --color_fondoLoader:#f3f3f3;
    }

    .nocturno{
        --color_fondoLoader:#121729;
    }

    .ocultar{
        display: none !important;
    }
    .loading{
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background:var(--color_fondoLoader);
        z-index: 3;
    }
    .loading > div{
        width: 3.6em;
        height: 3.6em;
        background-color:#1064CF;
        border-radius: 50%;
        display: inline-block;
        animation:1s bounce infinite ease-in-out;

    }
    .loading>.loading_1{
        animation-delay: -0.30s;
    }
    .loading>.loading_2{
        animation-delay: -0.15s;
    }

    @keyframes bounce {
        0%,80%,100%{
            transform: scale(0);
        }
        40%{
            transform: scale(1);
        }

    }
</style>