<div class="ui segment">
    <div class="ui form">
        <div class="ui tiny statistic">
          <div class="value">
            <?php  echo ' $'.$painting->MSRP; ?>
          </div>
        </div>
        <div class="four fields">
            <div class="three wide field">
                <label>Quantity</label>
                <input type="number">
            </div>                               
            <div class="four wide field">
                <label>Frame</label>
                <select id="frame" class="ui search dropdown">
                <?php 
                    $frames = getFrameTypes();
                    foreach($frames as $frame){
                    echo '<option>'.$frame->title.' [ $'.$frame->price.' ]</option>';
                    }
                ?>
                </select>
            </div>  
            <div class="four wide field">
                <label>Glass</label>
                <select id="glass" class="ui search dropdown">
                <?php 
                    $glasses = getGlassTypes();
                    foreach($glasses as $glass){
                        echo '<option>'.$glass->title.' [ $'.$glass->price.' ]</option>';
                    }
                ?>
                </select>
            </div>  
            <div class="four wide field">
                <label>Matt</label>
                <select id="matt" class="ui search dropdown">
                <?php 
                    $matts = getMattTypes();
                    foreach($matts as $matt){
                        echo '<option>'.$matt->title.'</option>';
                    }
                ?>
                </select>
            </div>           
        </div>                     
    </div>

    <div class="ui divider"></div>

    <button class="ui labeled icon orange button">
      <i class="add to cart icon"></i>
      Add to Cart
    </button>
    <a class="ui right labeled icon button" href="addToFavorites.php?id=<?php echo $row['PaintingID'] ?>&path=<?php echo $row['ImageFileName'] ?>&title=<?php echo urlencode($row['Title']) ?>">

      <i class="heart icon"></i>
      Add to Favorites
    </a>        
</div>  