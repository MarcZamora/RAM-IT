<!-- $priority = 0;
$is = 0;
$ls = 0;
$severity = 0;


$loc = $_POST["location"];
if ($loc == "Outside"){
    $floor = 0;
    $room = 0;
} else {
    $floor = $_POST["floor"];
    $room = $_POST["room"];
}

if ($itype == "Hardware"){
    $priority == 2;
    if ($inqry == "Desktop") {
        $is ==  2;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    }
    elseif ($inqry == "Laptop") {
        $is ==  2;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    }
    elseif ($inqry == "Tablet") {
        $is ==  2;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    }
    elseif ($inqry == "Camera") {
        $is ==  2;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    } 
    elseif ($inqry == "Projector") {
        $is ==  2;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    } else {
        $is ==  1;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    }

}

elseif ($itype == "Software") {
    $priority == 2;
    if ($inqry == "Microsoft Teams") {
        $is ==  2;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    }
    elseif ($inqry == "Outlook") {
        $is ==  2;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    }
    elseif ($inqry == "VM Virtual Box") {
        $is ==  2;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    }
    elseif ($inqry == "Cisco") {
        $is ==  2;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    } else {
        $is ==  1;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    }
}

elseif ($itype == "Hyflex Equipment") {
    $priority == 3;
    if ($inqry == "LinkedIn Accounts") {
        $is ==  2;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    }
    elseif ($inqry == "APC Websites") {
        $is ==  2;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    } else {
        $is ==  1;
        if ($loc == "Outside") {
            $is ==  2;
            $ls ==  1;
        } else {
            $is ==  2;
            $ls ==  1;
        }
    }
}

elseif ($itype == "Borrowed Equipment") {
    $priority == 3;


} else {
    $priority == 1;
} -->