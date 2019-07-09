---
titel:  Kirby Commands
autor: cn
---

Ein paar Kirby Commands für die Übung. Eine komplette Übersicht gibt es auf der [Kirby Site](https://getkirby.com/docs/guide).

## Alle Items holen

{% highlight php %}
  <!-- alle items holen -->
  <?php foreach (page('graphics')->children()->limit(20) as $item): ?>
    
    <!-- item nur anzeigen, wenn es einen Langtext gibt -->
    <?php if($item->Longtext()->length()>0): ?>

    <a href="<?=$item->url()?>">
      <li>
      <!-- exemplarisch mal zwei Felder anzeigen -->
      <?= $item->BildURL() ?>
      <?= $item->Title() ?>
      </li>
    </a>
    <?php endif ?>
  <?php endforeach?>
{% endhighlight %}





## Snippet einbinden

{% highlight php %}
<?php snippet('m/image-with-caption/template', ["url"=>$page->BildURL(), "caption"=>$page->Longtext()]); ?>
{% endhighlight %}


## Datenfelder anzeigen

{% highlight php %}
<figure class="m-image-with-caption">
  <img src="<?=$url?>">
  <figcaption>
  <?=$caption->html()?>
  </figcaption>
</figure>
{% endhighlight %}