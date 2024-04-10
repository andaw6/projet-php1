<div class="progresse pg3">
    <div 
            class="progress-bar" 
            role="progressbar" 
            aria-valuenow="75" 
            aria-valuemin="0" 
            aria-valuemax="100" 
            data-text="<?php $progress['lbl'] ?>"
            style="
                background: 
                    radial-gradient(closest-side,  <?= $progress['bg'] ?> 79%, transparent 80% 100%),
                    conic-gradient(<?= $progress['bg-cp'] ." ". $progress['pc'] .", ". $progress['bg1-cp']  ?> 0%)
                ;
                &::before{
                    color:<?=$progress['bg-lbl']?>;
                    content:attr(data-text);
                };
            "
            >
    </div>
</div>