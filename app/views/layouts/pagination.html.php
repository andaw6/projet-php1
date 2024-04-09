<!-- Le code pour la pagination -->
<footer id="pagination" class="flex-sbc">
    <form method="post" class="content-left flex">
        <span>Items par page:</span>
        <select name="nb_element">
            <option value="5" <?php if ($nbItems ==  5) : ?>selected <?php endif; ?>> 5</option>
            <option value="10" <?php if ($nbItems == 10) : ?>selected <?php endif; ?>>10</option>
            <option value="15" <?php if ($nbItems == 15) : ?>selected <?php endif; ?>>15</option>
            <option value="20" <?php if ($nbItems == 20) : ?>selected <?php endif; ?>>20</option>
            <option value="25" <?php if ($nbItems == 25) : ?>selected <?php endif; ?>>25</option>
            <option value="30" <?php if ($nbItems == 30) : ?>selected <?php endif; ?>>30</option>
        </select>
        <button type="submit" class="flex-cc">
            <input type="hidden" name="refresh">
            <i class='bx bx-refresh'></i>
        </button>
    </form>
    <div class="content-right flex">
        <div class="info">
            <?= $start ?> - <?= $end ?> of <?= $lenght_data ?>
        </div>
        <div class="switch">
            <button>
                <a href="?cp=1&page=<?=$PAGE?>">
                    <i class='bx bx-first-page'></i>
                </a>
            </button>
            <button>
                <a href="?cp=2&page=<?=$PAGE?>">
                    <i class='bx bx-chevron-left'></i>
                </a>
            </button>
            <button>
                <a href="?cp=3&page=<?=$PAGE?>">
                    <i class='bx bx-chevron-right'></i>
                </a>
            </button>
            <button>
                <a href="?cp=4&page=<?=$PAGE?>">
                    <i class='bx bx-last-page'></i>
                </a>
            </button>
        </div>
    </div>
</footer>