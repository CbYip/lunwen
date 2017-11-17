 $('#doc-select-1').change(function () {
        var id = $('#doc-select-1').val();
        $("#form_list").empty();
        var content = "";
        if(id == '1'){
            content += '<div class="am-form-group">\n' +
                '<label for="doc-ipt-email-1">题目</label>\n' +
                '<input type="text" name="title" class="" id="doc-ipt-email-1" placeholder="如果尚未拟题可以填写内容方向或留空">\n' +
                '</div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-ipt-email-1">文稿字数</label>\n' +
                '              <input type="text" name="word" class="" id="doc-ipt-email-1" placeholder="如字数5000字以上">\n' +
                '      </div>';
            content += '<div class="am-form-group">\n' +
                '          <label for="doc-ipt-email-1">完成时间</label>\n' +
                '          <input type="text" name="ctime" class="am-form-field" id="datetimepicker" placeholder="选择日期"  readonly required />\n' +
                '       </div>';
            content += '<div class="am-form-group">\n' +
                '          <label for="doc-ipt-email-1">文稿类型</label>\n' +
                '          <input type="text" name="type" class="" id="doc-ipt-email-1" placeholder="输入您的文稿类型">\n' +
                '       </div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-ipt-email-1">专业方向</label>\n' +
                '           <input type="text" name="major" class="" id="doc-ipt-email-1" placeholder="输入您的论文的专业方向">\n' +
                '       </div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-ta-1">具体要求</label>\n' +
                '           <textarea name="require" class="" rows="5" id="doc-ta-1" placeholder=""></textarea>\n' +
                '       </div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-ta-1">重复率要求</label>\n' +
                '           <input type="text" name="reply" class="" rows="5" id="doc-ta-1" placeholder="如重复率低于30%" />\n' +
                '       </div>';
        }else if(id == '2'){
            content += '<div class="am-form-group">\n' +
                '<label for="doc-ipt-email-1">题目</label>\n' +
                '<input type="text" name="title" class="" id="doc-ipt-email-1" placeholder="如果尚未拟题可以填写内容方向或留空">\n' +
                '</div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-ipt-email-1">论文字符数</label>\n' +
                '              <input type="text" name="word" class="" id="doc-ipt-email-1" placeholder="如3000字符左右">\n' +
                '      </div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-select-1">期刊级别</label>\n' +
                '             <select id="doc-select-2" name="level" >\n' +
                '                <option value="0">省级期刊</option>\n' +
                '                <option value="1">国家级期刊</option>\n' +
                '                <option value="2">科技核心期刊</option>\n' +
                '                <option value="3">中文核心期刊</option>\n' +
                '                <option value="4">cssci核心期刊</option>\n' +
                '                <option value="5">EI/SCI核心期刊</option>\n' +
                '                <option value="6">暂不确定</option>\n' +
                '              </select>\n' +
                '           <span class="am-form-caret"></span>\n' +
                '       </div>';
            content += '<div class="am-form-group">\n' +
                '          <label for="doc-ipt-email-1">发表时间</label>\n' +
                '          <input type="text" name="fatime" class="am-form-field" placeholder="如1个月内、2个月内、一年内发表等"  ' +
                ' />\n' +
                '       </div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-ta-1">其他要求</label>\n' +
                '           <textarea name="require" class="" rows="5" id="doc-ta-1" placeholder="请输入您的其他要求"></textarea>\n' +
                '       </div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-ipt-email-1">稿件提交</label>\n' +
                '           <input type="text" name="submission" class="" id="doc-ipt-email-1" value="发到邮箱8651658@qq.com, 注明微信会员编号" readonly="readonly">\n' +
                '       </div>';
        }else if(id == '3'){
            content += '<div class="am-form-group">\n' +
                '<label for="doc-ipt-email-1">题目</label>\n' +
                '<input type="text" name="title" class="" id="doc-ipt-email-1" placeholder="如果尚未拟题可以填写内容方向或留空">\n' +
                '</div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-select-1">修改类型</label>\n' +
                '             <select id="doc-select-3" name="modify" >\n' +
                '                <option value="0">按意见修改内容</option>\n' +
                '                <option value="1">降低论文重复率</option>\n' +
                '                <option value="2">修改论文格式</option>\n' +
                '                <option value="3">整体润色修改</option>\n' +
                '                <option value="4">其他修改</option>\n' +
                '              </select>\n' +
                '           <span class="am-form-caret"></span>\n' +
                '       </div>';
            content += "<div class='repeat'></div>";
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-ipt-email-1">论文字符数</label>\n' +
                '              <input type="text" name="word" class="" id="doc-ipt-email-1" placeholder="如全文9500字符">\n' +
                '      </div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-ta-1">修改意见</label>\n' +
                '           <textarea name="require" class="" rows="5" id="doc-ta-1" placeholder="请输入您的修改需求"></textarea>\n' +
                '       </div>';
            content += '<div class="am-form-group">\n' +
                '          <label for="doc-ipt-email-1">修改完成时间</label>\n' +
                '          <input type="text" name="ctime" class="am-form-field" id="datetimepicker" placeholder="选择日期" readonly required />\n' +
                '       </div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-ipt-email-1">稿件提交</label>\n' +
                '           <input type="text" name="submission" class="" id="doc-ipt-email-1" value="发到邮箱8651658@qq.com, 注明微信会员编号" readonly="readonly">\n' +
                '       </div>';
        }else if(id == '4'){
            content += '<div class="am-form-group">\n' +
                '<label for="doc-ipt-email-1">题目</label>\n' +
                '<input type="text" name="title" class="" id="doc-ipt-email-1" placeholder="如果尚未拟题可以填写内容方向或留空">\n' +
                '</div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-ipt-email-1">论文字符数</label>\n' +
                '              <input type="text" name="word" class="" id="doc-ipt-email-1" placeholder="如3000字符左右">\n' +
                '      </div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-select-1">期刊级别</label>\n' +
                '             <select id="doc-select-2" name="level">\n' +
                '                <option value="0">省级期刊</option>\n' +
                '                <option value="1">国家级期刊</option>\n' +
                '                <option value="2">科技核心期刊</option>\n' +
                '                <option value="3">中文核心期刊</option>\n' +
                '                <option value="4">cssci核心期刊</option>\n' +
                '                <option value="5">EI/SCI核心期刊</option>\n' +
                '                <option value="6">暂不确定</option>\n' +
                '              </select>\n' +
                '           <span class="am-form-caret"></span>\n' +
                '       </div>';
            content += '<div class="am-form-group">\n' +
                '          <label for="doc-ipt-email-1">发表时间</label>\n' +
                '          <input type="text" name="fatime" class="am-form-field" placeholder="如1个月内、2个月内、一年内发表等" />\n' +
                '       </div>';
            content += '<div class="am-form-group">\n' +
                '           <label for="doc-ta-1">具体要求</label>\n' +
                '           <textarea name="require" class="" rows="5" id="doc-ta-1" placeholder="请输入您的具体需求"></textarea>\n' +
                '       </div>';
        }
        $("#form_list").append(content);
    })
