$('#submit').click(function () {
    var username = $('input[name=username]').val();
    var usertel = $('input[name=usertel]').val();
    var service = $('#doc-select-1 option:selected').text();
    var title = $('input[name=word]').val();
    var word = $('input[name=word]').val();
    var ctime = $('input[name=word]')
    var type = $('input[name=type]').val();
    var major = $('input[name=major]').val();
    var require = $('input[name=username]').val();
    var level = $('#doc-select-2 option:selected').text();

    //验证中文字符
    var pattern = /^[\u4E00-\u9FA5]{2,4}$/;
    //验证手机号码
    var tel = /^1[34578]\d{9}$/;

    if(username == "" || pattern.test(username) == false){
        alert("请输入您的姓名！");
        return false;
    }else if(usertel.length != "11" || tel.test(usertel) == false){
        alert("请输入正确的手机号码！");
        return false;
    }else if(service == "-请选择-"){
        alert("请选择您的论文服务选项！")
        return false;
    }else if(word == ""){
        alert("请输入您的字数要求！");
        return false
    }else if(type == ""){
        alert("请输入您的文稿类型！");
        return false;
    }else if(major == ""){
        alert("请输入您的专业类型!");
        return false;
    }else if(require == ""){
        alert("请输入您的需求!");
        return false;
    }else if(ctime == ""){
        alert("请选择您的时间！");
        return false;
    }else{
        alert("订单提交成功！");
        $.ajax({
            type: 'POST',
            url: "{:url('order')}",
            data: $(".am-form").serialize(),
            dataType: 'json',
            success: function (data) {
                alert("请求成功！");
            }
        })
    }
});