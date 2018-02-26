import babel from "rollup-plugin-babel";
import resolve from 'rollup-plugin-node-resolve';
import commonjs from 'rollup-plugin-commonjs';
import uglify from 'rollup-plugin-uglify';


export default [{
    input: 'resources/scripts/particles.js',
    output: {
      file: 'public/scripts/particles.js',
      format: 'iife',
    },
    plugins: [
      resolve(),
      babel({
        exclude: "node_modules/**",
      }),
      commonjs(),
      (process.env.NODE_ENV === 'production' && uglify())
    ],
  },
  {
    input: 'resources/scripts/main.js',
    output: {
      file: 'public/scripts/main.js',
      format: 'iife',
    },
    plugins: [
      resolve(),
      babel({
        exclude: "node_modules/**",
      }),
      commonjs(),
      (process.env.NODE_ENV === 'production' && uglify())
    ],
  },

]
