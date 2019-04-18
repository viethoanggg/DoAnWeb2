//kiem tra dang nhap
function ktdangnhap()
		{
			var tdn=document.forms["formdangnhap"]["username"].value;
			var mk=document.forms["formdangnhap"]["pass"].value;
			
			if(/^[a-zA-Z0-9 ]*$/.test(tdn) == false)
					{
						alert("Ký tự nhập không hợp lê, vui lòng nhập lại.");
						return false;
					}
			else
			{	
				if(tdn=="")
				{
                    document.getElementById("kiemtra").innerHTML="Tên đăng nhập không được để trống";
					return false;
                }
                if(mk=="")
                {
                    document.getElementById("kiemtra").innerHTML="Mật khẩu không được để trống";
					return false;
                }
			}
		}
		
//Dang ky
		function submitdangky(){
            var user=document.forms["formdangky"]["username"].value;
            var hoten=document.forms["formdangky"]["name"].value;
			var email=document.forms["formdangky"]["email"].value;
            var mk=document.forms["formdangky"]["pass"].value;
			var nlmk=document.forms["formdangky"]["repass"].value;
			var s=/^[!.#$@_+,?%&*)(}{-|'"><;:=/^$\\]*$/;
			if(s.test(user))
					{
						alert("Ký tự nhập không hợp lệ, vui lòng nhập lại.");
						return false;
					}
			else if(s.test(hoten))
					{
						alert("Ký tự nhập không hợp lệ, vui lòng nhập lại.");
						return false;
					}
            else 
			{	
			if(user=="")
                {
                    document.getElementById("kiemtra").innerHTML="Tên đăng nhập không được để trống";
					return false;
                }
           
            if(mk==""||nlmk=="")
                {
                    document.getElementById("kiemtra").innerHTML="Vui lòng nhập mật khẩu";
					return false;
                }
            if(mk!=nlmk)
                {
                    document.getElementById("kiemtra").innerHTML="Mật khẩu không khớp";
					        return false;
                }
        
            if(hoten=="")
                {
                    document.getElementById("kiemtra").innerHTML="Bạn chưa nhập họ tên";
					        return false;
                }
			}
		
				alert("Đăng kí thành công");
			      
            
		}
