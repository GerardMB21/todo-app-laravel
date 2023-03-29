<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>ToDo App</title>
</head>
<body
  class="
    w-screen
    min-h-screen
    dark:bg-[#0f131a]
    dark:text-slate-300
  "
>
  <nav
    class="
      w-full
      h-20
      bg-[#1a1d24]
      flex
      items-center
      px-6
    "
  >
    <ul
      class="
        grid
        grid-cols-3
        items-end
        gap-6
      "
    >
      <li>
        <span
          class="
            text-2xl
            font-semibold
          "
        >
          Mis tareas
        </span>
      </li>
      <li
        class="
          flex
          justify-center
        "
      >
        <a
          href="/todos"
        >
          Tareas
        </a>
      </li>
      <li
        class="
          flex
          justify-center
        "
      >
        <a
          href="/categories"
        >
          Categorias
        </a>
      </li>
    </ul>
  </nav>

  @yield('content')

</body>
</html>