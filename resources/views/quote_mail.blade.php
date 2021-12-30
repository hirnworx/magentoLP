<!DOCTYPE html>
<html lang="en">
<body  style="background-color:#fff;">
 <p>Hii,</p>
 <p>User Details is given below:</p>
 <div style="width:48%;float: left;">
               
        <table border="1" cellpadding="0" cellspacing="0" style="width:100%;border-color: #000;border-collapse:collapse;">
            <tbody>
                <tr>
                    <td style="padding:5px;"><b>Name</b></td>
                    <td style="padding:5px">{{$details['name']}}</td>
                </tr>
                <tr>
                    <td style="padding:5px;"><b>Phone Number</b></td>
                    <td style="padding:5px">{{$details['number']}}</td>
                </tr>
                <tr>
                    <td style="padding:5px"><b>Email</b></td>
                    <td style="padding:5px">{{$details['email']}}</td>
                </tr>
                <tr>
                    <td style="padding:5px"><b>Subject</b></td>
                    <td style="padding:5px">{{$details['subject']}}</td>
                </tr>
            </tbody>
        </table>
        <div>
        <br>
        <p>
        Regards,
        </p> <br>
        <img src="{{asset('images/logo.tridhya.png')}}" data-rjs="1"  alt="image" height="30px" >
 </div>     
</body>
</html>