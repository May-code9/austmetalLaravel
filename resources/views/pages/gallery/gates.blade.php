@extends('master')
@section('title')
Ausmetal | Gallery: Italian Rolling and Swing Gates
@endsection
@section('meta')
<meta name='description' content='Here are some of the our Italian Rolling and Swing Gates'/>
@endsection
@section('content')
<section id="section-content" class="content page-12 moto-section" data-widget="section" data-container="section">
  <div class="moto-widget moto-widget-container moto-container_content_58613c9f14" data-widget="container" data-container="container" data-css-name="moto-container_content_58613c9f14">
    <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="row" data-spacing="laaa">
      <div class="container-fluid">
        <div class="row">
          <div class="moto-cell col-sm-12" data-container="container">
            <div class="moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="text" data-preset="default">
              <div class="moto-widget-text-content moto-widget-text-editable">
                <p style="text-align: center;" class="moto-text_system_4">Gallery: Italian Rolling and Swing Gates<br></p>
              </div>
            </div>
            <div data-widget-id="wid__grid_gallery__58abf0900095d" class="moto-widget moto-widget-grid-gallery moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto  " data-widget="grid_gallery" data-preset="default" data-spacing="aaaa">
              <div class="moto-widget-grid-gallery-items"  data-moto-grid-gallery-options='{&quot;rowHeight&quot;:358,&quot;fixedHeight&quot;:false,&quot;margins&quot;:30,&quot;lastRow&quot;:&quot;justify&quot;,&quot;showCaptions&quot;:true,&quot;enableLightbox&quot;:true}'>
                @forelse($gates as $gate)
                <a  href="{{ asset('img/Gates/'.$gate->image_title2) }}" class="moto-widget-grid-gallery-item">
                  <img src="{{ asset('img/Gates/'.$gate->image_title) }}" alt="{{ $gate->image_title }} in Port Harcourt" class="moto-widget-grid-gallery-image">
                  <div class="caption caption_html moto-widget-text ">
                    <p class="moto-text_system_6"><span class="moto-color5_4">{{ $gate->project_number }}</span></p>
                  </div>
                </a>
                @empty
                <h2 style="text-align:center; color: black">No Images Yet</h2>
                @endforelse
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-medium moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="masa" data-visible-on="mobile-v">
      <div class="moto-widget-spacer-block" style="height:10px"></div>
    </div>
  </div>
  <div class="moto-widget moto-widget-row row-fixed moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="row" data-spacing="aaaa">
    <div class="container-fluid">
      <div class="row">
        <div class="moto-cell col-sm-12" data-container="container">
          <div class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-small moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="lasa" data-visible-on="mobile-v">
            <div class="moto-widget-spacer-block" style="height:10px"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="moto-widget moto-widget-row" data-widget="row">
    <div class="container-fluid">
      <div class="row">
        <div class="moto-cell col-sm-12" data-container="container">
          <div class="moto-widget moto-widget-spacer moto-preset-default moto-spacing-top-large moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto" data-widget="spacer" data-preset="default" data-spacing="laaa" data-visible-on="mobile-v">
            <div class="moto-widget-spacer-block" style="height:10px"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
</div>

@endsection
