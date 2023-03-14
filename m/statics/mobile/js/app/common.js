define(function(require, exports, module) {

    // 公用初始�?
    exports.init = function() {

        // 头部搜索
        $('#topSearchForm').each(function(){
            var $form = $(this);
            $form.on('submit', function(){
                var val = $form.find('.search-input').val();
                if(val && val.replace(/\s/g, '')){
                    return true;
                }
                return false;
            })
        })

        // 头部菜单-显示/隐藏
        var $body = $('html');
        $('#topMenuTap').on('click', function(){
            $body.toggleClass('top-menu-cover');
        })

        $('#topMenu').each(function(){
            var $menu = $(this);
            $menu.find('.hd-item').on('click', function(){
                var $this = $(this), index = $this.index();
                $this.addClass('on').siblings().removeClass('on');
                $menu.find('.bd-item').removeClass('on').eq(index).addClass('on');
            })
            $menu.find('.top-menu-overlay').on('click', function(){
                $body.removeClass('top-menu-cover');
            })
        })

        // 回到顶部
        exports.goToTop();

    }

    // 首页
    exports.index = function() {
        $('#iFocus').each(function(){
            var $focus = $(this);
            TouchSlide({
                slideCell: "#iFocus",
                titCell: ".hd",
                mainCell: '.bd',
                effect: 'leftLoop',
                interTime: 5000,
                autoPage: true,
                autoPlay: true,
                startFun: function(i){
                    // console.log(i);
                }
            });
        })

        $('#specialTopic').each(function(){
            var $focus = $(this);
            TouchSlide({
                slideCell: "#specialTopic",
                titCell: ".hd ul",
                mainCell: '.bd ul',
                effect: 'leftLoop',
                interTime: 5000,
                autoPage: true,
                autoPlay: true
            });
        })

        // 友情链接
        $('#friendLink').each(function(){
            var $cont = $(this).find('.section-bd .list');
            var $item = $(this).find('.section-bd li');
            var offsetY = 0;
            var lineNum = 0;
            var htmlStr = '';
            // 重构html结构，用于轮播滚�?
            $item.each(function(){
                if(this.offsetTop > offsetY){
                    if(offsetY){
                        htmlStr += '</ul><ul>';
                    }
                    lineNum++;
                    offsetY = this.offsetTop;
                }
                htmlStr += this.outerHTML;
            });
            htmlStr = '<ul>'+ htmlStr +'</ul>';
            $cont.html(htmlStr);
            // console.log(lineNum);
            if($item.length && lineNum > 1){
                TouchSlide({
                    slideCell: "#friendLink",
                    mainCell: '.list',
                    effect: 'topLoop',
                    interTime: 3000,
                    autoPlay: true
                });
            }
        });

        // tab切换
        $('.js-tabs .section-hd .name').on('click', function() {
            var t = $(this),
                s = t.parents('.js-tabs'),
                i = t.index();

            t.addClass('on').siblings().removeClass('on');
            s.find('.section-bd-item').removeClass('on').eq(i).addClass('on');
        });

        // 精选分类tab切换
        $('.section-category .section-hd  .links  a').on('click', function() {
            var t = $(this),
                s = t.parents('.section-category'),
                i = t.index();
            t.addClass('on').siblings().removeClass('on');
            if (i == 0) {
                s.find('.category-list').addClass('none').eq(i).removeClass('none');
            } else {
                s.find('.category-list').addClass('none').eq(i - 1).removeClass('none');
            }
        })
    }

    // 导航
    exports.navbar = function() {
        $('#navMore').on('click', function() {
            $('body').toggleClass('category-menu-cover');
        })
        $('.category-menu-overlay').on('click', function() {
            $('body').removeClass('category-menu-cover');
        })

        // 最�?/最�? 切换
        $('#navTab .name').on('click', function() {
            var target = $(this).attr('for');

            $('#navTab .name').removeClass('on');
            $(this).addClass('on');

            $('.soft-list').attr('id', '').parent().addClass('hide');
            $(target).attr('id', 'softList').parent().removeClass('hide');
        })
    }



    // pc软件列表
    exports.pcsoftlist = function(option) {
        $('#softContent .btn-dropdown').on('click', function(){
            $(this).parent().toggleClass('open');
        })


    }



    // 游戏列表
    exports.gamelist = function(option) {
       
        $('#softContent .btn-dropdown').on('click', function(){
            $(this).parent().toggleClass('open');
        })

       // console.log(option);
        
       


        $('#softContent .list-head .btn-gray').on('click', function(){
            var $this = $(this);
            var dataType = $this.attr('data-type');

            if($this.hasClass('on')){
                return false;
            }
            $this.addClass('on').siblings().removeClass('on');
            loader.resetData({
                app_classtype:option.app_classtype,
                app_liangwang:option.app_liangwang,
                current_catid:option.current_catid,
                type: dataType,
                page: 1,
                pageSize: 20
            })
        })
    }



    // 软件详情
    exports.softDetail = function() {

        // 软件截图
        TouchSlide({
            slideCell: "#softFocus",
            titCell: ".hd ul",
            mainCell: ".bd ul",
            autoPlay: false,
            autoPage: true //自动分页
        });

        // 软件截图预览弹窗
        // exports.imageView();        

        // 介绍展开/收起
        $('#softRemarkText').each(function(){
            var $this = $(this);
            var $cont = $this.find('.text-inner');

            if($cont.get(0).scrollHeight == $cont.height()){
                $('#textShow').hide();
                return false;
            }
            // console.log($cont.height(), $cont.get(0).scrollHeight);

            $('#textShow').on('click', function(){
                $this.addClass('show');
            })
            $('#textHide').on('click', function(){
                $this.removeClass('show');
            })
        })


        // 其他版本
        $('#softVersionList').each(function(){
            var $list = $(this);
            if($list.find('.item').length > 5){
                $list.addClass('list-more');
            }
            $list.find('.btn-more').on('click', function(){
                $list.addClass('list-show');
            })
        })

        // 手游排行�?        
        exports.mobileGamesList();


        // 图片懒加�?
        exports.imgLazyLoad({auto: false});  

        exports.clickimg('#softFocus')
        exports.clickimg('#softRemarkText .text')
        
    }


    // 排行�?
    exports.toplist = function(option) {
        var $topList = $('#topList'),
            $drops = $('#topList .dropdown');
            
        $topList.find('.btn-dropdown').on('click', function(){
            var $drop = $(this).parent();
            if(!$drop.hasClass('open')){
                $drops.removeClass('open');
                $drop.addClass('open');
            }
            else{
                $drops.removeClass('open');
            }
        })



    }	
	
    // 游戏列表�?
    exports.game = function(){
        $('#navMore').on('click', function(){
            $('body').toggleClass('category-menu-cover');
        })
        $('.category-menu-overlay').on('click', function(){
            $('body').removeClass('category-menu-cover');
        })

    }

    // 资讯详情
    exports.newsDetail = function() {
        exports.imgLazyLoad();
        exports.mobileGamesList();

        var filterImage = $('.news-detail .soft-list2 img').attr('src');
        exports.clickimg('.news-detail .text', filterImage)
    }

    exports.clickimg = function(el, filterImage){
        require('photo-browser');
        console.log('photo-browser');
        $(el).each(function(){
            var $cont = $(this);
            var imgArr = [];
            $cont.find('img').each(function(i){
                var imgsrc = $(this).attr('src')
                if(imgsrc != filterImage){
                    imgArr.push(imgsrc);
                }
            })
            $cont.on('click', 'img', function(){
                var index = $(this).index();
                var imgsrc = $(this).attr('src');
                var index = getIndexBySrc(imgsrc);
                window.photoBrowser.init({
                    lazyLoading: true,
                    lazyLoadingInPrevNext: true,
                    initialSlide: index || 0,
                    maxZoom: 1.8,
                    photos: [
                        { url: imgArr.join(',') }
                    ]
                }).open();
            })
            function getIndexBySrc(imgsrc){
                var index = 0;
                $.each(imgArr, function(i, v){
                    if(imgsrc == v){
                        index = i;
                    }
                })
                return index;
            }
        })
    }

    // 手游排行�?
    exports.mobileGamesList = function(){
        $('#mobileGamesList').each(function(){
            var $list = $(this);
            $list.find('.tab-cell li').on('click', function(){
                $this = $(this);
                $this.addClass('on').siblings().removeClass('on');
                $list.find('.tab-content').removeClass('on').eq($this.index()).addClass('on');
            })

            // 点击查看更多
            $list.find('.btn-more').on('click', function(){
                var count = 4;
                var $cont = $(this).parents('.tab-content');
                var $item = $cont.find('.list-item');
                var index = $cont.find('.list-item.hide').index();

                $item.each(function(i){
                    if(i >= index && i < index + count){
                        $(this).removeClass('hide');
                    }
                })
                if(index+count >= $item.length){
                    $cont.find('.section-ft').hide();
                }
            });            
        })
    }

    // 上拉加载
    exports.pullToLoading = function(params) {
        var $list = $('#listContent');
        var $listLoader = $('#listLoader');
        var $win = $(window);
        var body = document.body;
        var time = 0;

        // console.log($list.children().length, params.pageSize, params.pageSize || 10,params);
        if($list.children().length < (params.pageSize || 10)){
            $listLoader.html('');
        }
        var loader = {
            type: params.type || 'get',
            ajaxUrl: params.url || '',
            ajaxData: params.data || {},
            ajaxing: false,
            callback: params.success,
            onScroll: function(){
                var that = loader;
                clearTimeout(time);
                time = setTimeout(function() {
                    var scrollHeight = body.scrollHeight;
                    var offsetTop = $win.height() + $win.scrollTop();                    

                    if (offsetTop + 500 > scrollHeight && !that.ajaxing && $list.children().length <= 30) {
                        that.onLoad();
                    }else{
                        $listLoader.html('');
                    }
                }, 100)
            },
            onLoad: function(){
                var that = loader;
                var page = that.ajaxData.page;
                var size = that.ajaxData.pageSize || 10;
                that.ajaxing = true;
                
                $.ajax({
                    url: that.ajaxUrl,
                    type: that.type,
                    data: that.ajaxData,
                    dataType: 'json',
                    success: function(res) {
                        var data = res.data;
                        if(typeof that.callback === 'function'){
                            that.callback(data);
                        }
                        else{
                            var html = that.getHTML(data);                            
                            $list.append(html);
                        }
                        console.log(data.length, size)
                        if(data.length < size){
                            $listLoader.html('');
                        }else{
                            page++;
                            that.ajaxData.page = page;
                            that.ajaxing = false;
                        }
                    },
                    error: function(data){
                        console.log(data);
                        // ajaxing = false;
                    }
                })
            },
            getHTML: function(data){
                if(typeof params.getHTML === 'function'){
                    return params.getHTML(data);
                }

                var arr = [];
                $.each(data, function(i, v){
                    if(v.typed=='game' || v.typed=='pcrj') {
                        var frontmark = v.catname;
                        var tittle = v.title;
                    }else if(v.typed=='searched') {
                        var frontmark = v.catname;
                        var tittle = v.s_title;
                    }else {
                        var frontmark = v.catname;
                        var tittle = v.title;
                    }
                    var btn_name = v.catid==178?'开&nbsp;�?':'�?&nbsp;�?';
                    if(v.typed=='topsj'){
                        var page = loader.ajaxData.page;
                        var size = loader.ajaxData.pageSize || 10;
                        var n = (page-1)*size+i+1;
                        var item = '<a class="list-item flex" href="'+ v.url +'">'+
                        '<div class="num num'+n+'">'+n+'</div>'+
                            '<div class="col">'+
                            '<img class="pic lazy" src="https://www.weite.com/statics/mobile/images/blank.png" data-src="'+ v.thumb +'" alt="'+ v.title+'">'+
                            '</div>'+
                            '<div class="con flex-item">'+
                            '<div class="tit">'+ v.title+'</div>'+
                            '<div class="star star'+ v.stars +'"></div>'+
                            '<div class="txt">'+
                            '<span class="attr">'+ frontmark +'</span>'+
                            '<span class="attr">大小:'+ v.filesize2 +'</span>'+
                        '</div>'+
                        '</div>'+
                        '<div class="col">'+
                        '    <span class="btn btn-download">'+btn_name+'</span>'+
                        '</div>'+
                        '</a>';
                    }else{
                        var item = '<a class="list-item flex" href="'+ v.url +'">'+
                            '<div class="col"><img class="pic" src="'+ v.thumb +'" alt="'+ v.title +'"></div>'+
                            '<div class="con flex-item">'+
                            '<div class="tit">'+ tittle +'</div>'+
                            '<div class="star star'+ v.stars +'"></div>'+
                            '<div class="txt">'+
                            '<span class="attr">'+ frontmark +'</span>'+
                            '<span class="attr">大小:'+ v.filesize2 +'</span>'+
                            '</div>'+
                            '</div>'+
                            '<div class="col">'+
                            '<span class="btn btn-download">'+btn_name+'</span>'+
                            '</div>'+
                            '</a>';
                    }

                    arr.push(item);
                })
                return arr.join('');
            },
            resetData: function(data, getHTML){
                $list.html('');
                $listLoader.html('<span class="preloader"></span>');
                this.ajaxing = false;
                this.ajaxData = $.extend({}, data);
                this.onLoad();
                if(typeof getHTML === 'function'){
                    this.getHTML = getHTML;
                }
            },
            init: function(){
                if($list.length && $listLoader.length){
                    $win.on('scroll', this.onScroll);
                }
            }
        }
        loader.init();

        return loader;
    }


    // 图片延迟加载
    exports.imgLazyLoad = function(options) {
        // 判断图片是否可加�?
        var win = $(window),
            height = win.height(),
            distance = 200,
            timer = 0;
        
        $.loadable = function(el) {
            return win.scrollTop() + height + distance > $(el).offset().top;
        };

        $.lazyload = function() {
            $('.lazy').not('.loaded').each(function(i) {
                var $this = $(this), src = $this.attr('data-src');
                if ($.loadable(this)) {
                    !!src && $this.attr('src', src)
                    $this.addClass('loaded');
                }
            });
        };

        if(!(options && !options.auto)){
            $.lazyload();
        }
        win.on('scroll', function() {
            // console.log('scroll');
            // clearTimeout(timer);
            // timer = setTimeout(function() {
                $.lazyload();
            // }, 100);
        });
    }

    // 回到顶部
    exports.goToTop = function() {
        var $totop = $('#totop'),
            $win = $(window),
            timer = 0;
    
        // 回到顶部 - 隐藏/显示
        $win.scroll(function() {
            clearTimeout(timer)
            timer = setTimeout(function() {
                ($win.scrollTop() > 500) ? $totop.addClass('fadein'): $totop.removeClass('fadein');
            }, 100)
        });
        $totop.on('click', function() {
            $totop.removeClass('fadein');
            $win.scrollTop(0);
        })
    }

    // 详情 - 图片放大
    exports.imageView = function(){
        var maxHeight = $(window).height() * 0.75;
        $('.images-preview img').css('max-height', maxHeight+ 'px');
        $('.images-preview').each(function (i) {
            $(this).attr('id', 'imagesPreview'+i);
            TouchSlide({ 
                slideCell: "#" + $(this).attr('id'),
                titCell: ".hd ul", //开启自动分�? autoPage:true ，此时设�? titCell 为导航元素包裹层
                mainCell: ".bd ul", 
                effect: "leftLoop", 
                interTime: 5000,
                autoPage: true,//自动分页
                autoPlay: false, //自动播放
                endFn: function(e,i){
                    console.log(e,i);
                }
            });
        })
        var preventDefault = function(e){ e.preventDefault(); }
        $(document).on('click', '.images-preview', function () {
            $('body').removeClass('images-preview-cover');
            document.removeEventListener('touchmove', preventDefault, false);
        })
        $('#softFocus').on('click', 'li', function () {
            $('.images-preview .hd li').eq($(this).index()).click();
            $('body').addClass('images-preview-cover');
            document.addEventListener('touchmove', preventDefault, false);
        })
    }

    // 详情
    exports.detail = function() {
        TouchSlide({ slideCell: "#softFocus1" });
        TouchSlide({ slideCell: "#softFocus2" });
        exports.imageView();
        exports.imgLazyLoad();


        // 介绍展开/收起
        $('#softRemarkText1').each(function(){
            var $this = $(this);
            var $cont = $this.find('.text-inner');

            if($cont.get(0).scrollHeight == $cont.height()){
                $('#textShow1').hide();
                return false;
            }
            // console.log($cont.height(), $cont.get(0).scrollHeight);

            $('#textShow1').on('click', function(){
                $this.addClass('show');
            })
            $('#textHide1').on('click', function(){
                $this.removeClass('show');
            })
        })
        $('#softRemarkText2').each(function(){
            var $this = $(this);
            var $cont = $this.find('.text-inner');

            if($cont.get(0).scrollHeight == $cont.height()){
                $('#textShow2').hide();
                return false;
            }
            
            $('#textShow2').on('click', function(){
                $this.addClass('show');
            })
            $('#textHide2').on('click', function(){
                $this.removeClass('show');
            })
        })
    }
})